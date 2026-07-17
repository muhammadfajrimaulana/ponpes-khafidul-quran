<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Auth;
use App\Models\Santri;

class DashboardController extends \App\Http\Controllers\Controller
{
    protected $santriModel;
    public function index()
    {
        $user = Auth::user();
        $santri = Santri::all();

        $data = [
            'user' => $user,
            'santri' => $santri,
            'total_santri_aktif' => $santri->where('status', 'aktif')->count(),
            'total_alumni' => $santri->where('status', 'alumni')->count(),
            'total_pengurus' => \App\Models\Pengurus::count(),
            'total_berita' => \App\Models\Berita::count(),
            'total_galeri' => \App\Models\Galeri::count(),
        ];

        // Mengarahkan ke view 'dashboard' sambil membawa data user
        return view('dashboard.index', $data);
    }
}
