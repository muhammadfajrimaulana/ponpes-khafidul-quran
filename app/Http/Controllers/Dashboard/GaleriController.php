<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends \App\Http\Controllers\Controller
{
    public function index(Request $request)
    {
        // Jika tidak ada parameter 'kategori', set jadi 'semua'
        $kategori = $request->query('kategori', 'semua');

        $query = \App\Models\Galeri::query();

        // Hanya filter kalau kategorinya bukan 'semua'
        if ($kategori !== 'semua') {
            $query->where('tipe', $kategori);
        }

        $galeri = $query->get();

        return view('dashboard.galeri', compact('galeri', 'kategori'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'tipe' => 'required',
            'file_path' => 'nullable|image',
            'url_video' => 'nullable|string'
        ]);

        if ($request->tipe == 'foto' && $request->hasFile('file_path')) {
            $data['file_path'] = $request->file('file_path')->store('galeri', 'public');
        }

        Galeri::create($data);
        return back()->with('success', 'Media berhasil ditambah');
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $data = $request->validate([
            'judul' => 'required',
            'tipe' => 'required',
            'file_path' => 'nullable|image',
            'url_video' => 'nullable|string'
        ]);

        if ($request->tipe == 'foto' && $request->hasFile('file_path')) {
            // Hapus file lama jika ada
            if ($galeri->file_path) {
                Storage::disk('public')->delete($galeri->file_path);
            }
            $data['file_path'] = $request->file('file_path')->store('galeri', 'public');
        } else {
            // Jika tipe bukan foto, hapus file_path lama
            if ($galeri->file_path) {
                Storage::disk('public')->delete($galeri->file_path);
            }
            $data['file_path'] = null;
        }

        $galeri->update($data);
        return back()->with('success', 'Media berhasil diperbarui');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus file jika ada
        if ($galeri->file_path) {
            Storage::disk('public')->delete($galeri->file_path);
        }

        $galeri->delete();
        return back()->with('success', 'Media berhasil dihapus');
    }
}
