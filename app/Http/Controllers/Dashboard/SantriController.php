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
            $query->where('nama_santri', 'like', '%' . $request->search . '%')
                ->orWhere('kode_santri', 'like', '%' . $request->search . '%')
                ->orWhere('nama_wali', 'like', '%' . $request->search . '%')
                ->orWhere('kontak_wali', 'like', '%' . $request->search . '%')
                ->orWhere('alamat', 'like', '%' . $request->search . '%')
                ->orWhere('angkatan', 'like', '%' . $request->search . '%');
        }

        $santri = $query->paginate(10);
        return view('dashboard.datasantri', compact('santri'));
    }

    public function updateStatus(Request $request, $id)
    {
        $santri = \App\Models\Santri::findOrFail($id);

        // Jika status diubah menjadi alumni
        if ($request->status === 'alumni') {
            // Cek apakah sudah ada di tabel alumni agar tidak duplikat
            \App\Models\Alumni::updateOrCreate(
                ['kode_santri' => $santri->kode_santri], // Key untuk cek duplikat
                [
                    'nama' => $santri->nama_santri,
                    'foto' => $santri->foto,
                    'angkatan' => $santri->angkatan,
                    'nama_wali' => $santri->nama_wali,
                    'kontak_wali' => $santri->kontak_wali,
                    'tahun_lulus' => date('Y'), // Tahun saat ini
                ]
            );
        }

        $santri->status = $request->status;
        $santri->save();

        return back()->with('success', 'Status berhasil diperbarui dan data alumni tersinkronisasi.');
    }
}
