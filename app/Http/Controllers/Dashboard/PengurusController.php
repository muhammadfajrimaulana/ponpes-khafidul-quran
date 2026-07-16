<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class PengurusController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $pengurus = \App\Models\Pengurus::all();
        return view('dashboard.datapengurus', compact('pengurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pengurus = new \App\Models\Pengurus();
        $pengurus->nama = $request->input('nama');
        $pengurus->jabatan = $request->input('jabatan');

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/pengurus'), $filename);
            $pengurus->foto = $filename;
        }

        $pengurus->save();

        return redirect()->back()->with('success', 'Data pengurus berhasil ditambahkan.');
    }
}
