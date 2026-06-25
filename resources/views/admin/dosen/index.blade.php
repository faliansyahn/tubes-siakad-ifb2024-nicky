@extends('layouts.app')

@section('title', 'Data Dosen')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="bi bi-person-badge"></i> Data Dosen</h4>
    <a href="{{ route('admin.dosen.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Dosen
    </a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dosen as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nidn }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>
                        <a href="{{ route('admin.dosen.edit', $d->nidn) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('admin.dosen.destroy', $d->nidn) }}" method="POST" class="d-inline">
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
                    <td colspan="4" class="text-center">Belum ada data dosen.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
