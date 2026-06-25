@extends('layouts.app')

@section('title', 'Data Mata Kuliah')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="bi bi-book"></i> Data Mata Kuliah</h4>
    <a href="{{ route('admin.matakuliah.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Mata Kuliah
    </a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($matakuliah as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->kode_matakuliah }}</td>
                    <td>{{ $m->nama_matakuliah }}</td>
                    <td>{{ $m->sks }}</td>
                    <td>
                        <a href="{{ route('admin.matakuliah.edit', $m->kode_matakuliah) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('admin.matakuliah.destroy', $m->kode_matakuliah) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data mata kuliah.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection