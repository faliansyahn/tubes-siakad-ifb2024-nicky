<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIAKAD - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background-color: #2c3e50; }
        .sidebar a { color: #ecf0f1; text-decoration: none; }
        .sidebar a:hover { background-color: #34495e; }
        .sidebar .active { background-color: #3498db; }
        .main-content { background-color: #f8f9fa; min-height: 100vh; }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-0">
            <div class="p-3 text-white text-center border-bottom border-secondary">
                <h5 class="mb-0">SIAKAD</h5>
                <small>{{ auth()->user()->name }}</small>
            </div>
            <ul class="nav flex-column p-2">
                @if(auth()->user()->role === 'admin')
                    <li class="nav-item">
                        <a class="nav-link p-2 rounded" href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 rounded" href="{{ route('admin.dosen.index') }}"><i class="bi bi-person-badge"></i> Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 rounded" href="{{ route('admin.mahasiswa.index') }}"><i class="bi bi-people"></i> Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 rounded" href="{{ route('admin.matakuliah.index') }}"><i class="bi bi-book"></i> Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 rounded" href="{{ route('admin.jadwal.index') }}"><i class="bi bi-calendar3"></i> Jadwal</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link p-2 rounded" href="{{ route('mahasiswa.dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 rounded" href="{{ route('mahasiswa.krs.index') }}"><i class="bi bi-journal-check"></i> KRS Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 rounded" href="{{ route('mahasiswa.jadwal') }}"><i class="bi bi-calendar3"></i> Jadwal Saya</a>
                    </li>
                @endif
            </ul>
            <div class="p-2 position-absolute bottom-0 w-100">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 main-content p-4">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>