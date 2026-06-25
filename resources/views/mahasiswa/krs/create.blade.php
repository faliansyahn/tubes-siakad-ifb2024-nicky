@extends('layouts.app')

@section('title', 'Ambil Mata Kuliah')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="bi bi-journal-plus"></i> Ambil Mata Kuliah</h4>
    <a href="{{ route('mahasiswa.krs.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('mahasiswa.krs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Pilih Mata Kuliah</label>
                <select name="kode_matakuliah" class="form-select @error('kode_matakuliah') is-invalid @enderror">
                    <option value="">-- Pilih Mata Kuliah --</option>
                    @foreach($matakuliah as $m)
                        <option value="{{ $m->kode_matakuliah }}" {{ old('kode_matakuliah') == $m->kode_matakuliah ? 'selected' : '' }}>
                            {{ $m->kode_matakuliah }} - {{ $m->nama_matakuliah }} ({{ $m->sks }} SKS)
                        </option>
                    @endforeach
                </select>
                @error('kode_matakuliah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Ambil
            </button>
        </form>
    </div>
</div>
@endsection