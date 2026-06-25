<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Jadwal;
use App\Models\Krs;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalDosen = Dosen::count();
        $totalMahasiswa = Mahasiswa::count();
        $totalMatakuliah = Matakuliah::count();
        $totalJadwal = Jadwal::count();
        $totalKrs = Krs::count();

        return view('admin.dashboard', compact(
            'totalDosen',
            'totalMahasiswa', 
            'totalMatakuliah',
            'totalJadwal',
            'totalKrs'
        ));
    }
}