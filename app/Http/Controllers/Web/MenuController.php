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
    public function santri(Request $request)
    {
        $santri = Santri::query()
            ->when($request->kelas, function ($query) use ($request) {
                $query->where('kelas', $request->kelas);
            })
            ->when($request->search, function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->where('nama_santri', 'like', '%' . $request->search . '%')
                        ->orWhere('nisn', 'like', '%' . $request->search . '%');
                });
            })
            ->get();
        return view('web.dokumen.datasantri', compact('santri'));
    }
    public function alumni(Request $request)
    {
        $alumni = Alumni::query();

        // Filter Angkatan
        if ($request->filled('angkatan')) {
            $alumni->where('angkatan', $request->angkatan);
        }

        // Filter Nama
        if ($request->filled('search')) {
            $alumni->where('nama', 'LIKE', '%' . $request->search . '%')
                ->orWhere('tahun_lulus', 'LIKE', '%' . $request->search . '%')
                ->orWhere('pekerjaan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('kampus', 'LIKE', '%' . $request->search . '%');
        }

        $alumni = $alumni->get();
        $daftar_angkatan = Alumni::select('angkatan')->distinct()->pluck('angkatan');

        return view('web.dokumen.dataalumni', compact('alumni', 'daftar_angkatan'));
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
