@extends('layouts.dashboard')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Manajemen Santri</h2>
        <p class="text-gray-500 text-sm">Kelola data santri pondok pesantren di sini.</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <!-- Header & Pencarian -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <h2 class="text-2xl font-bold text-gray-800">Data Santri</h2>

            <form action="{{ route('admin.santri') }}" method="GET" class="flex gap-2">
                <input type="text" name="search" placeholder="Cari nama/kode..."
                    class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 outline-none">
                <button type="submit" class="bg-slate-800 text-white px-4 py-2 rounded-lg hover:bg-slate-900">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <!-- Tabel Data Santri -->
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th class="p-4">Kode Santri</th>
                        <th class="p-4">Nama</th>
                        <th class="p-4">Angkatan</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y text-gray-700">
                    @foreach ($santri as $item)
                        <tr>
                            <td class="p-4 font-mono text-emerald-600">{{ $item->kode_santri }}</td>
                            <td class="p-4">{{ $item->nama }}</td>
                            <td class="p-4">{{ $item->angkatan }}</td>
                            <td class="p-4">
                                <button class="text-blue-600 hover:underline">Detail</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
