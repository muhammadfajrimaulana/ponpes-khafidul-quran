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
                ->orWhere('nisn', 'like', '%' . $request->search . '%')
                ->orWhere('nama_wali', 'like', '%' . $request->search . '%')
                ->orWhere('kontak_wali', 'like', '%' . $request->search . '%')
                ->orWhere('alamat', 'like', '%' . $request->search . '%')
                ->orWhere('angkatan', 'like', '%' . $request->search . '%');
        }

        $santri = $query->paginate(10);
        return view('dashboard.datasantri', compact('santri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_santri' => 'required|string|max:255',
            'nisn' => 'required|unique:santris,nisn',
            'jenis_kelamin' => 'required|string',
            'kelas' => 'required|string',
            'angkatan'      => 'required|digits:4',
            'alamat' => 'required|string',
            'nama_wali' => 'required|string',
            'kontak_wali' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $santri = new \App\Models\Santri();
        $santri->nama_santri = $request->input('nama_santri');
        $santri->nisn = $request->input('nisn');
        $santri->jenis_kelamin = $request->input('jenis_kelamin');
        $santri->angkatan = $request->input('angkatan');
        $santri->kelas = $request->input('kelas');
        $santri->nama_wali = $request->input('nama_wali');
        $santri->kontak_wali = $request->input('kontak_wali');
        $santri->alamat = $request->input('alamat');
        $santri->status = $request->input('status');

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/santri'), $filename);
            $santri->foto = $filename;
        }

        $santri->save();
        return redirect()->back()->with('success', 'Data santri berhasil ditambahkan.');
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
