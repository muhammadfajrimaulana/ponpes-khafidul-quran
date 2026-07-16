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
                ->orWhere('kode_santri', $request->search);
        }

        $alumni = $query->paginate(10);
        return view('dashboard.dataalumni', compact('alumni'));
    }
}
