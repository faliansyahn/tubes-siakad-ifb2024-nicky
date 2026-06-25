@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="bi bi-book"></i> Tambah Mata Kuliah</h4>
    <a href="{{ route('admin.matakuliah.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.matakuliah.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Kode Mata Kuliah</label>
                <input type="text" name="kode_matakuliah" class="form-control @error('kode_matakuliah') is-invalid @enderror" value="{{ old('kode_matakuliah') }}" placeholder="Contoh: IF001">
                @error('kode_matakuliah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Mata Kuliah</label>
                <input type="text" name="nama_matakuliah" class="form-control @error('nama_matakuliah') is-invalid @enderror" value="{{ old('nama_matakuliah') }}" placeholder="Masukkan Nama Mata Kuliah">
                @error('nama_matakuliah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">SKS</label>
                <input type="number" name="sks" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks') }}" placeholder="Masukkan Jumlah SKS" min="1" max="6">
                @error('sks')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan
            </button>
        </form>
    </div>
</div>
@endsection