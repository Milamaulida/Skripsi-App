<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function edit($id)
{
    $nilai = Nilai::findOrFail($id);
    return view('nilai.edit', compact('nilai'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'ph1' => 'nullable|numeric|min:0|max:100',
        'ph2' => 'nullable|numeric|min:0|max:100',
        'ph3' => 'nullable|numeric|min:0|max:100',
        'ph4' => 'nullable|numeric|min:0|max:100',
        'uts1' => 'nullable|numeric|min:0|max:100',
        'uas1' => 'nullable|numeric|min:0|max:100',
        'uts2' => 'nullable|numeric|min:0|max:100',
        'uas2' => 'nullable|numeric|min:0|max:100',
    ]);

    $nilai = Nilai::findOrFail($id);
    $nilai->update($request->all());

    return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diperbarui');
}
}
