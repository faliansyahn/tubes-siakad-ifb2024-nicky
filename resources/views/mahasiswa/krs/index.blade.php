@extends('layouts.app')

@section('title', 'KRS Saya')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="bi bi-journal-check"></i> KRS Saya</h4>
    <a href="{{ route('mahasiswa.krs.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Ambil Mata Kuliah
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
                @forelse($krs as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->matakuliah->kode_matakuliah }}</td>
                    <td>{{ $k->matakuliah->nama_matakuliah }}</td>
                    <td>{{ $k->matakuliah->sks }}</td>
                    <td>
                        <form action="{{ route('mahasiswa.krs.destroy', $k->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin drop mata kuliah ini?')">
                                <i class="bi bi-trash"></i> Drop
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada mata kuliah yang diambil.</td>
                </tr>
                @endforelse
            </tbody>
            @if($krs->count() > 0)
            <tfoot>
                <tr class="table-dark">
                    <th colspan="3" class="text-end">Total SKS</th>
                    <th>{{ $krs->sum(fn($k) => $k->matakuliah->sks) }}</th>
                    <th></th>
                </tr>
            </tfoot>
            @endif
        </table>
    </div>
</div>
@endsection