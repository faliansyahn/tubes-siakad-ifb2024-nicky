@extends('layouts.app')

@section('title', 'Edit Jadwal')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="bi bi-calendar3"></i> Edit Jadwal</h4>
    <a href="{{ route('admin.jadwal.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.jadwal.update', $jadwal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Mata Kuliah</label>
                <select name="kode_matakuliah" class="form-select @error('kode_matakuliah') is-invalid @enderror">
                    <option value="">-- Pilih Mata Kuliah --</option>
                    @foreach($matakuliah as $m)
                        <option value="{{ $m->kode_matakuliah }}" {{ old('kode_matakuliah', $jadwal->kode_matakuliah) == $m->kode_matakuliah ? 'selected' : '' }}>
                            {{ $m->kode_matakuliah }} - {{ $m->nama_matakuliah }}
                        </option>
                    @endforeach
                </select>
                @error('kode_matakuliah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Dosen</label>
                <select name="nidn" class="form-select @error('nidn') is-invalid @enderror">
                    <option value="">-- Pilih Dosen --</option>
                    @foreach($dosen as $d)
                        <option value="{{ $d->nidn }}" {{ old('nidn', $jadwal->nidn) == $d->nidn ? 'selected' : '' }}>
                            {{ $d->nidn }} - {{ $d->nama }}
                        </option>
                    @endforeach
                </select>
                @error('nidn')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <select name="kelas" class="form-select @error('kelas') is-invalid @enderror">
                    <option value="">-- Pilih Kelas --</option>
                    <option value="A" {{ old('kelas', $jadwal->kelas) == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ old('kelas', $jadwal->kelas) == 'B' ? 'selected' : '' }}>B</option>
                    <option value="C" {{ old('kelas', $jadwal->kelas) == 'C' ? 'selected' : '' }}>C</option>
                </select>
                @error('kelas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Hari</label>
                <select name="hari" class="form-select @error('hari') is-invalid @enderror">
                    <option value="">-- Pilih Hari --</option>
                    <option value="Senin" {{ old('hari', $jadwal->hari) == 'Senin' ? 'selected' : '' }}>Senin</option>
                    <option value="Selasa" {{ old('hari', $jadwal->hari) == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                    <option value="Rabu" {{ old('hari', $jadwal->hari) == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                    <option value="Kamis" {{ old('hari', $jadwal->hari) == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                    <option value="Jumat" {{ old('hari', $jadwal->hari) == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                </select>
                @error('hari')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jam</label>
                <input type="time" name="jam" class="form-control @error('jam') is-invalid @enderror" value="{{ old('jam', $jadwal->jam) }}">
                @error('jam')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Update
            </button>
        </form>
    </div>
</div>
@endsection