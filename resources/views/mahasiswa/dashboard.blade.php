@extends('layouts.app')

@section('title', 'Dashboard Mahasiswa')

@section('content')
<h4 class="mb-4"><i class="bi bi-speedometer2"></i> Dashboard Mahasiswa</h4>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card text-white bg-primary">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">KRS Saya</h6>
                    <p class="mb-0">Lihat & kelola mata kuliah yang diambil</p>
                </div>
                <i class="bi bi-journal-check fs-1"></i>
            </div>
            <div class="card-footer">
                <a href="{{ route('mahasiswa.krs.index') }}" class="text-white">Lihat KRS →</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card text-white bg-success">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">Jadwal Saya</h6>
                    <p class="mb-0">Lihat jadwal perkuliahan kamu</p>
                </div>
                <i class="bi bi-calendar3 fs-1"></i>
            </div>
            <div class="card-footer">
                <a href="{{ route('mahasiswa.jadwal') }}" class="text-white">Lihat Jadwal →</a>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h6><i class="bi bi-person-circle"></i> Informasi Akun</h6>
        <hr>
        <p><strong>Nama:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        <p><strong>NPM:</strong> {{ auth()->user()->npm }}</p>
    </div>
</div>
@endsection