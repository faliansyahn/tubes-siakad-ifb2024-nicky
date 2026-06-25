<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Krs;
use App\Models\Matakuliah;
use App\Models\Mahasiswa;

class KrsController extends Controller
{
    public function index()
    {
        $npm = auth()->user()->npm;
        $krs = Krs::with('matakuliah')->where('npm', $npm)->get();
        return view('mahasiswa.krs.index', compact('krs'));
    }

    public function create()
    {
        $npm = auth()->user()->npm;
        $sudahAmbil = Krs::where('npm', $npm)->pluck('kode_matakuliah');
        $matakuliah = Matakuliah::whereNotIn('kode_matakuliah', $sudahAmbil)->get();
        return view('mahasiswa.krs.create', compact('matakuliah'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
        ]);

        $npm = auth()->user()->npm;

        $sudahAda = Krs::where('npm', $npm)
            ->where('kode_matakuliah', $request->kode_matakuliah)
            ->exists();

        if ($sudahAda) {
            return redirect()->back()->with('error', 'Mata kuliah sudah diambil!');
        }

        Krs::create([
            'npm' => $npm,
            'kode_matakuliah' => $request->kode_matakuliah,
        ]);

        return redirect()->route('krs.index')->with('success', 'Mata kuliah berhasil diambil!');
    }

    public function destroy(string $id)
    {
        $krs = Krs::findOrFail($id);
        $krs->delete();
        return redirect()->route('krs.index')->with('success', 'Mata kuliah berhasil di-drop!');
    }

    public function jadwal()
    {
        $npm = auth()->user()->npm;
        $krs = Krs::with(['matakuliah.jadwal.dosen'])->where('npm', $npm)->get();
        return view('mahasiswa.jadwal', compact('krs'));
    }
}