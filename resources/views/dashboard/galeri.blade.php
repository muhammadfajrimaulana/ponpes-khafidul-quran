@extends('layouts.dashboard')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Manajemen Galeri</h2>

        <!-- Tab Filter -->
        <div class="mt-6 border-b border-gray-200">
            <ul class="flex space-x-8">
                <li>
                    <a href="{{ route('admin.galeri') }}"
                        class="pb-3 block border-b-2 {{ request()->query('kategori', 'semua') == 'semua' ? 'border-emerald-600 text-emerald-600 font-bold' : 'border-transparent text-gray-500' }}">
                        Semua
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.galeri', ['kategori' => 'foto']) }}"
                        class="pb-3 block border-b-2 {{ request()->query('kategori') == 'foto' ? 'border-emerald-600 text-emerald-600 font-bold' : 'border-transparent text-gray-500' }}">
                        Foto
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.galeri', ['kategori' => 'video']) }}"
                        class="pb-3 block border-b-2 {{ request()->query('kategori') == 'video' ? 'border-emerald-600 text-emerald-600 font-bold' : 'border-transparent text-gray-500' }}">
                        Video
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Grid Foto -->
    @php $cat = request()->query('kategori', 'semua'); @endphp

    @if ($cat == 'foto' || $cat == 'semua')
        <div class="mb-10">
            <h3 class="font-bold text-gray-700 mb-4">Galeri Foto</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @forelse($galeri->where('tipe', 'foto') as $item)
                @empty
                    <p class="text-sm text-gray-400">Belum ada foto.</p>
                @endforelse
            </div>
        </div>
    @endif

    @if ($cat == 'video' || $cat == 'semua')
        <div>
            <h3 class="font-bold text-gray-700 mb-4">Galeri Video</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse($galeri->where('tipe', 'video') as $item)
                @empty
                    <p class="text-sm text-gray-400">Belum ada video.</p>
                @endforelse
            </div>
        </div>
    @endif
@endsection
