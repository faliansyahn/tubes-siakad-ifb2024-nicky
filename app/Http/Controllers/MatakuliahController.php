<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('admin.matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        return view('admin.matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|unique:matakuliah,kode_matakuliah|max:8',
            'nama_matakuliah' => 'required|max:50',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        Matakuliah::create($request->all());
        return redirect()->route('admin.matakuliah.index')->with('success', 'Data mata kuliah berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('admin.matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_matakuliah' => 'required|max:50',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->update($request->all());
        return redirect()->route('admin.matakuliah.index')->with('success', 'Data mata kuliah berhasil diupdate!');
    }

    public function destroy(string $id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->delete();
        return redirect()->route('admin.matakuliah.index')->with('success', 'Data mata kuliah berhasil dihapus!');
    }
}