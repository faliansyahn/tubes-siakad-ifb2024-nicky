@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<h4 class="mb-4"><i class="bi bi-speedometer2"></i> Dashboard Admin</h4>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card text-white bg-primary">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">Total Dosen</h6>
                    <h2 class="mb-0">{{ $totalDosen }}</h2>
                </div>
                <i class="bi bi-person-badge fs-1"></i>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.dosen.index') }}" class="text-white">Lihat Detail →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-success">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">Total Mahasiswa</h6>
                    <h2 class="mb-0">{{ $totalMahasiswa }}</h2>
                </div>
                <i class="bi bi-people fs-1"></i>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.mahasiswa.index') }}" class="text-white">Lihat Detail →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-warning">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">Total Mata Kuliah</h6>
                    <h2 class="mb-0">{{ $totalMatakuliah }}</h2>
                </div>
                <i class="bi bi-book fs-1"></i>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.matakuliah.index') }}" class="text-white">Lihat Detail →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-info">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">Total Jadwal</h6>
                    <h2 class="mb-0">{{ $totalJadwal }}</h2>
                </div>
                <i class="bi bi-calendar3 fs-1"></i>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.jadwal.index') }}" class="text-white">Lihat Detail →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-danger">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">Total KRS</h6>
                    <h2 class="mb-0">{{ $totalKrs }}</h2>
                </div>
                <i class="bi bi-journal-check fs-1"></i>
            </div>
            <div class="card-footer">
                <span class="text-white">Total pengambilan KRS</span>
            </div>
        </div>
    </div>
</div>
@endsection