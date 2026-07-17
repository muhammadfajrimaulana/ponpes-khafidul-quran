<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class PengurusController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $pengurus = \App\Models\Pengurus::all();
        return view('dashboard.datapengurus', compact('pengurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pengurus,email',
            'no_hp' => 'required|string|max:20',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pengurus = new \App\Models\Pengurus();
        $pengurus->nama = $request->input('nama');
        $pengurus->email = $request->input('email');
        $pengurus->no_hp = $request->input('no_hp');
        $pengurus->jabatan = $request->input('jabatan');
        $pengurus->alamat = $request->input('alamat');
        $pengurus->jenis_kelamin = $request->input('jenis_kelamin');
        $pengurus->visi = $request->input('visi');
        $pengurus->keahlian = $request->input('keahlian');
        $pengurus->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $pengurus->masa_bakti = $request->input('masa_bakti');

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/pengurus'), $filename);
            $pengurus->foto = $filename;
        }

        $pengurus->save();

        return redirect()->back()->with('success', 'Data pengurus berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $pengurus = \App\Models\Pengurus::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pengurus,email,' . $pengurus->id,
            'no_hp' => 'required|string|max:20',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:Terverifikasi,Verifikasi Ditolak,Menunggu Verifikasi',
        ]);

        $pengurus->nama = $request->input('nama');
        $pengurus->email = $request->input('email');
        $pengurus->no_hp = $request->input('no_hp');
        $pengurus->jabatan = $request->input('jabatan');
        $pengurus->alamat = $request->input('alamat');
        $pengurus->jenis_kelamin = $request->input('jenis_kelamin');
        $pengurus->visi = $request->input('visi');
        $pengurus->keahlian = $request->input('keahlian');
        $pengurus->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $pengurus->masa_bakti = $request->input('masa_bakti');
        $pengurus->status = $request->input('status');

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pengurus->foto) {
                $oldFotoPath = public_path('uploads/pengurus/' . $pengurus->foto);
                if (file_exists($oldFotoPath)) {
                    unlink($oldFotoPath);
                }
            }

            // Simpan foto baru
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/pengurus'), $filename);
            $pengurus->foto = $filename;
        }

        $pengurus->save();

        return redirect()->back()->with('success', 'Data pengurus berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengurus = \App\Models\Pengurus::findOrFail($id);
        if ($pengurus->foto) {
            $fotoPath = public_path('uploads/pengurus/' . $pengurus->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }
        $pengurus->delete();
        return redirect()->back()->with('success', 'Data pengurus berhasil dihapus.');
    }
}
