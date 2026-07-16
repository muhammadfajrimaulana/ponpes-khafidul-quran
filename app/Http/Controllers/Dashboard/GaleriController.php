<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Galeri;

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
}
