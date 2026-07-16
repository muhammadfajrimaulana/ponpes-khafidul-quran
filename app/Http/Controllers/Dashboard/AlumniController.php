<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class AlumniController extends \App\Http\Controllers\Controller
{
    public function index(Request $request)
    {
        // Contoh filter angkatan
        $angkatan = $request->input('angkatan');

        // Nanti ganti dengan model Alumni::query()
        return view('dashboard.dataalumni', compact('angkatan'));
    }
}
