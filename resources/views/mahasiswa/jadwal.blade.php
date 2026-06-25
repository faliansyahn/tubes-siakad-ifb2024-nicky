@extends('layouts.app')

@section('title', 'Jadwal Saya')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="bi bi-calendar3"></i> Jadwal Saya</h4>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>Dosen</th>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                @forelse($krs as $k)
                    @foreach($k->matakuliah->jadwal as $j)
                    <tr>
                        <td>{{ $loop->parent->iteration }}</td>
                        <td>{{ $k->matakuliah->nama_matakuliah }}</td>
                        <td>{{ $j->dosen->nama }}</td>
                        <td>{{ $j->kelas }}</td>
                        <td>{{ $j->hari }}</td>
                        <td>{{ $j->jam }}</td>
                    </tr>
                    @endforeach
                @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada jadwal. Ambil mata kuliah terlebih dahulu.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection