<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class AlumniController extends \App\Http\Controllers\Controller
{
    public function index(Request $request)
    {
        // Logika filter sederhana
        $query = \App\Models\Alumni::query();

        if ($request->has('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('nisn', 'like', '%' . $request->search . '%')
                ->orWhere('nama_wali', 'like', '%' . $request->search . '%')
                ->orWhere('kontak_wali', 'like', '%' . $request->search . '%')
                ->orWhere('alamat', 'like', '%' . $request->search . '%')
                ->orWhere('pekerjaan', 'like', '%' . $request->search . '%')
                ->orWhere('kampus', 'like', '%' . $request->search . '%')
                ->orWhere('angkatan', 'like', '%' . $request->search . '%');
        }

        $alumni = $query->paginate(10);
        return view('dashboard.dataalumni', compact('alumni'));
    }
}
