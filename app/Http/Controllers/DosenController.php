<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('admin.dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('admin.dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|unique:dosen,nidn|max:10',
            'nama' => 'required|max:50',
        ]);

        Dosen::create($request->all());
        return redirect()->route('admin.dosen.index')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('admin.dosen.edit', compact('dosen'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|max:50',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return redirect()->route('admin.dosen.index')->with('success', 'Data dosen berhasil diupdate!');
    }

    public function destroy(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('admin.dosen.index')->with('success', 'Data dosen berhasil dihapus!');
    }
}