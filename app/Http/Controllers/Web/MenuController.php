<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\Pengurus;
use App\Models\Santri;
use App\Models\Alumni;
use App\Models\Galeri;
use App\Models\Berita;

class MenuController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('web.index');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function sejarah()
    {
        return view('web.profil.Sejarah');
    }
    public function visi()
    {
        return view('web.profil.visi');
    }
    public function pengurus()
    {
        return view('web.profil.datapengurus');
    }
    public function mts()
    {
        return view('web.jenjang.mts');
    }
    public function ma()
    {
        return view('web.jenjang.ma');
    }
    public function berita()
    {
        return view('web.berita.kabarpondok');
    }
    public function artikel()
    {
        return view('web.berita.artikel');
    }
    public function santri()
    {
        $santri = Santri::all();
        return view('web.dokumen.datasantri', compact('santri'));
    }
    public function alumni()
    {
        return view('web.dokumen.dataalumni');
    }
    public function foto()
    {
        return view('web.galeri.foto');
    }
    public function video()
    {
        return view('web.galeri.video');
    }
}
