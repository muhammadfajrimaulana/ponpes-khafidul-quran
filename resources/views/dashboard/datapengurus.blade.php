@extends('layouts.dashboard')

@section('content')
    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <!-- Header Halaman -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Data Pengurus</h2>
            <button class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                <i class="fas fa-plus mr-2"></i> Tambah Pengurus
            </button>
        </div>

        <!-- Tabel Data -->
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th class="p-4">Nama</th>
                        <th class="p-4">Jabatan</th>
                        <th class="p-4">No. HP</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y text-gray-700">
                    <tr>
                        <td class="p-4">Habib Ahmad</td>
                        <td class="p-4">Pengasuh Utama</td>
                        <td class="p-4">0812xxxxxx</td>
                        <td class="p-4">
                            <button class="text-blue-600 hover:underline">Edit</button>
                            <button class="text-red-600 hover:underline ml-3">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
