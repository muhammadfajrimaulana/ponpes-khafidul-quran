<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Santri;

class AlumniController extends \App\Http\Controllers\Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\Santri::with('alumni')
            ->where('status', 'alumni');

        if ($request->filled('angkatan')) {
            $query->where('angkatan', $request->angkatan);
        }

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
            $query->where(function ($q) use ($searchTerm) {
                $q->where('nama_santri', 'like', $searchTerm)
                    ->orWhere('nisn', 'like', $searchTerm)
                    ->orWhereHas('alumni', function ($qAlumni) use ($searchTerm) {
                        $qAlumni->where('pekerjaan', 'like', $searchTerm)
                            ->orWhere('kampus', 'like', $searchTerm);
                    });
            });
        }

        $alumni = $query->get();

        return view('dashboard.dataalumni', compact('alumni'));
    }

    public function edit($id)
    {
        $santri = \App\Models\Santri::with('alumni')->findOrFail($id);
        return view('dashboard.editalumni', compact('santri'));
    }

    public function update(Request $request, $id)
    {
        $santri = \App\Models\Santri::findOrFail($id);

        $request->validate([
            'tahun_lulus' => 'nullable|numeric',
            'pekerjaan' => 'nullable|string'
        ]);

        \App\Models\Alumni::updateOrCreate(
            ['santri_id' => $id],
            [
                'santri_id'   => $id,
                'nama'        => $santri->nama_santri,
                'angkatan'        => $santri->angkatan,
                'nisn' => $santri->nisn,
                'alamat' => $santri->alamat,
                'nama_wali' => $santri->nama_wali,
                'kontak_wali' => $santri->kontak_wali,
                'tahun_lulus' => $request->tahun_lulus,
                'pekerjaan'   => $request->pekerjaan
            ]
        );

        return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    }
}
