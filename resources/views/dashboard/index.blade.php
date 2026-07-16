@extends('layouts.dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center">
            <div class="text-emerald-500 text-3xl mr-5"><i class="fas fa-users"></i></div>
            <div>
                <p class="text-gray-500 text-xs uppercase font-bold tracking-wider">Santri Aktif</p>
                <h2 class="text-2xl font-bold">1,284</h2>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center">
            <div class="text-blue-500 text-3xl mr-5"><i class="fas fa-user-graduate"></i></div>
            <div>
                <p class="text-gray-500 text-xs uppercase font-bold tracking-wider">Alumni</p>
                <h2 class="text-2xl font-bold">450</h2>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center">
            <div class="text-amber-500 text-3xl mr-5"><i class="fas fa-user-tie"></i></div>
            <div>
                <p class="text-gray-500 text-xs uppercase font-bold tracking-wider">Pengurus</p>
                <h2 class="text-2xl font-bold">12</h2>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center">
            <div class="text-purple-500 text-3xl mr-5"><i class="fas fa-pen-nib"></i></div>
            <div>
                <p class="text-gray-500 text-xs uppercase font-bold tracking-wider">Kajian</p>
                <h2 class="text-2xl font-bold">89</h2>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-gray-700">Santri Terbaru</h3>
                <a href="#" class="text-emerald-600 text-sm hover:underline">Lihat Semua</a>
            </div>
            <table class="w-full text-left">
                <thead>
                    <tr class="text-gray-400 text-sm border-b">
                        <th class="pb-3">Nama</th>
                        <th class="pb-3">Angkatan</th>
                        <th class="pb-3">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    <tr>
                        <td class="py-4">Ahmad Fauzan</td>
                        <td class="py-4">2024</td>
                        <td class="py-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Aktif</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4">Muhammad Rizky</td>
                        <td class="py-4">2023</td>
                        <td class="py-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Aktif</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <h3 class="font-bold text-gray-700 mb-6">Aksi Cepat</h3>
            <div class="space-y-3">
                <button
                    class="w-full text-left bg-emerald-50 text-emerald-700 p-3 rounded-lg hover:bg-emerald-100 transition">
                    <i class="fas fa-plus mr-2"></i> Tambah Santri
                </button>
                <button class="w-full text-left bg-blue-50 text-blue-700 p-3 rounded-lg hover:bg-blue-100 transition">
                    <i class="fas fa-book mr-2"></i> Buat Kajian Baru
                </button>
                <button class="w-full text-left bg-purple-50 text-purple-700 p-3 rounded-lg hover:bg-purple-100 transition">
                    <i class="fas fa-video mr-2"></i> Upload Video Galeri
                </button>
            </div>
        </div>
    </div>
@endsection
