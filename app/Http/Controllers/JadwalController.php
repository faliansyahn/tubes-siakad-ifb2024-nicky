<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Matakuliah;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::with(['dosen', 'matakuliah'])->get();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        $matakuliah = Matakuliah::all();
        return view('admin.jadwal.create', compact('dosen', 'matakuliah'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nidn' => 'required',
            'kelas' => 'required|max:1',
            'hari' => 'required',
            'jam' => 'required',
        ]);

        Jadwal::create($request->all());
        return redirect()->route('admin.jadwal.index')->with('success', 'Data jadwal berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $dosen = Dosen::all();
        $matakuliah = Matakuliah::all();
        return view('admin.jadwal.edit', compact('jadwal', 'dosen', 'matakuliah'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nidn' => 'required',
            'kelas' => 'required|max:1',
            'hari' => 'required',
            'jam' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('admin.jadwal.index')->with('success', 'Data jadwal berhasil diupdate!');
    }

    public function destroy(string $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('admin.jadwal.index')->with('success', 'Data jadwal berhasil dihapus!');
    }
}