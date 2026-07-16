<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends \App\Http\Controllers\Controller
{
    public function index(Request $request)
    {
        $kategori = $request->query('kategori');

        $query = \App\Models\Berita::query();

        // FILTER: Hanya ambil data yang kategorinya sesuai dengan parameter URL
        if ($kategori) {
            $query->where('kategori', $kategori);
        }

        $semuaBerita = $query->get();

        return view('dashboard.berita', compact('semuaBerita'));
    }
}
