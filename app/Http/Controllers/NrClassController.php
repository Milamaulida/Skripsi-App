<?php
namespace App\Http\Controllers;

use App\Models\NrClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NrClassController extends Controller
{
    public function classStudent()
    {
        $user = Auth::user();

        $kelas = $user->nrclass;

        return view('student.Class.index', [
            'kelas' => $kelas
        ]);
    }

    public function classTeacher()
    {
        $data = NrClass::paginate(10);
        return view('teacher.Class.index', compact('data'));
    }

    public function classData()
    {
        $data = NrClass::paginate(10);
        return view('admin.Class.index', compact('data'));
    }

    public function create()
    {
        return view('admin.Class.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        NrClass::create([
            'name' => $request->name,
        ]);

        return redirect()->route('class.data')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function show($id)
    {
        $data = NrClass::with('subjecttopic')->findOrFail($id);
        return view('materi_by_class', compact('data'));
    }

    public function edit(string $id)
    {
        $class = NrClass::findOrFail($id);
        return view('admin.Class.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $class       = NrClass::findOrFail($id);
        $class->name = $request->name;
        $class->save();

        return redirect()->route('class.data')->with('success', 'Kelas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $class = NrClass::findOrFail($id);
        $class->delete();

        return redirect()->route('class.data')->with('success', 'Kelas berhasil dihapus.');
    }
}