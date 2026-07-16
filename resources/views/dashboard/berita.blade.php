@extends('layouts.dashboard')

@section('icon')
    <i class="fas fa-pen-nib text-slate-900 mr-4 mt-1"></i>
@endsection
@section('title', 'Berita/Kajian')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manajemen Konten</h2>
            <p class="text-gray-500 text-sm">Kelola kabar pondok dan tulisan santri di sini.</p>
        </div>

        <div>
            <button class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                <i class="fas fa-plus mr-2"></i> Tambah Konten
            </button>
        </div>
    </div>

    <!-- Tab Navigation -->
    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <ul class="flex space-x-8">
                <li>
                    <a href="{{ route('admin.berita') }}"
                        class="pb-3 block border-b-2 {{ request()->query('kategori') == null ? 'border-emerald-600 text-emerald-600 font-bold' : 'border-transparent text-gray-500' }}">
                        Semua
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.berita', ['kategori' => 'berita']) }}"
                        class="pb-3 block border-b-2 {{ request()->query('kategori') == 'berita' ? 'border-emerald-600 text-emerald-600 font-bold' : 'border-transparent text-gray-500 hover:text-gray-700' }}">
                        Kabar Pondok
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.berita', ['kategori' => 'kajian']) }}"
                        class="pb-3 block border-b-2 {{ request()->query('kategori') == 'kajian' ? 'border-emerald-600 text-emerald-600 font-bold' : 'border-transparent text-gray-500 hover:text-gray-700' }}">
                        Artikel & Kajian
                    </a>
                </li>
            </ul>

            <!-- Button Aksi -->
            <ul class="flex justify-end mb-6">
                <form action="{{ route('admin.berita') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search" placeholder="Cari kabar berita, artikel atau kajian..."
                        class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 outline-none">
                    <button type="submit" class="bg-slate-800 text-white px-4 py-2 rounded-lg hover:bg-slate-900">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </ul>
        </div>

        <!-- Grid Konten -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @forelse($semuaBerita as $item)
                <div
                    class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition">
                    <div class="p-5">
                        <!-- Badge warna otomatis berubah sesuai kategori -->
                        <span
                            class="text-[10px] font-black {{ $item->kategori == 'berita' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' }} px-2 py-1 rounded uppercase">
                            {{ $item->kategori }}
                        </span>

                        <h3 class="font-bold text-gray-800 mt-3 leading-snug">{{ $item->judul }}</h3>
                        <p class="text-gray-500 text-xs mt-2 italic">
                            {{ $item->kategori == 'berita' ? $item->created_at->format('d M Y') : 'Oleh: ' . $item->penulis }}
                        </p>

                        <div class="mt-4 pt-4 border-t flex justify-between">
                            <button class="text-blue-600 text-xs font-semibold hover:text-blue-800">Edit</button>
                            <button class="text-red-600 text-xs font-semibold hover:text-red-800">Hapus</button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-10 text-gray-500">
                    Tidak ada data {{ request()->query('kategori') ?? '' }} yang ditemukan.
                </div>
            @endforelse

        </div>
    </div>
@endsection
