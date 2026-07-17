<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends \App\Http\Controllers\Controller
{
    public function index(Request $request)
    {
        $kategori = $request->query('kategori');

        $query = \App\Models\Berita::query();

        if ($kategori) {
            $query->where('kategori', $kategori);
        }

        if ($request->has('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%')
                ->orWhere('isi', 'like', '%' . $request->search . '%')
                ->orWhere('penulis', 'like', '%' . $request->search . '%');
        }

        $semuaBerita = $query->get();

        return view('dashboard.berita', compact('semuaBerita'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            'thumbnail' => 'image|nullable|max:2048',
            'penulis' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Berita::create($validated);
        return back()->with('success', 'Konten berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        $validated = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            'thumbnail' => 'image|nullable|max:2048',
            'penulis' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($berita->thumbnail) Storage::disk('public')->delete($berita->thumbnail);
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $berita->update($validated);
        return back()->with('success', 'Konten berhasil diupdate');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->thumbnail) Storage::disk('public')->delete($berita->thumbnail);
        $berita->delete();
        return back()->with('success', 'Konten dihapus');
    }
}
