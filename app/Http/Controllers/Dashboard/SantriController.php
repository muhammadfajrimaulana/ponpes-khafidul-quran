<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class SantriController extends \App\Http\Controllers\Controller
{
    public function index(Request $request)
    {
        // Logika filter sederhana
        $query = \App\Models\Santri::query();

        if ($request->has('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('kode_santri', $request->search);
        }

        $santri = $query->paginate(10);
        return view('dashboard.datasantri', compact('santri'));
    }
}
