@extends('layouts.dashboard')

@section('icon')
    <i class="fas fa-photo-video text-slate-900 mr-4 mt-1"></i>
@endsection
@section('title', 'Galeri')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manajemen Galeri</h2>
            <p class="text-gray-500 text-sm">Kelola foto dan video dokumentasi di sini.</p>
        </div>

        <div>
            <button onclick="openModal('create')" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                <i class="fas fa-plus mr-2"></i> Tambah Media
            </button>
        </div>
    </div>

    <!-- Tab Filter -->
    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
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

            <!-- Button Aksi -->
            <ul class="flex justify-end mb-6">
                <form action="{{ route('admin.galeri') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search" placeholder="Cari foto atau video..."
                        class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 outline-none">
                    <button type="submit" class="bg-slate-800 text-white px-4 py-2 rounded-lg hover:bg-slate-900">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </ul>
        </div>

        <!-- Grid Foto -->
        @php $cat = request()->query('kategori', 'semua'); @endphp

        @if ($cat == 'foto' || $cat == 'semua')
            <div class="mb-10">
                <h3 class="font-bold text-gray-700 mb-4">Galeri Foto</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @forelse($galeri->where('tipe', 'foto') as $item)
                        <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                            @php
                                $fotoPath = 'storage/galeri/' . $item->file_path;
                                $fotoTersedia = !empty($item->file_path) && file_exists(public_path($fotoPath));
                            @endphp

                            <img src="{{ $fotoTersedia ? asset($fotoPath) : asset('storage/galeries/default.png') }}"
                                alt="Thumbnail {{ $item->judul }}" class="w-full h-auto rounded-lg object-cover">
                            <div class="p-3">
                                <p class="text-xs font-bold text-gray-800 truncate">{{ $item->judul }}</p>
                                <div class="mt-2 flex justify-end gap-2">
                                    <!-- Tombol Edit & Hapus -->
                                    <button onclick='openModal("edit", {!! json_encode($item) !!})'
                                        class="text-blue-600 text-[10px] hover:underline">Edit</button>
                                    <form action="{{ route('admin.delete-galeri', $item->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button class="text-red-600 text-[10px] hover:underline"
                                            onclick="return confirm('Hapus?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                        <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                            <!-- Container Video -->
                            <div class="aspect-video w-full">
                                <iframe src="{{ $item->url_video }}" class="w-full h-full" allowfullscreen>
                                </iframe>
                            </div>

                            <div class="p-4">
                                <h4 class="font-bold text-gray-800 text-sm">{{ $item->judul }}</h4>
                                <div class="mt-4 pt-3 border-t flex justify-between">
                                    <button onclick='openModal("edit", {!! json_encode($item) !!})'
                                        class="text-blue-600 text-xs font-semibold hover:text-blue-800">Edit</button>
                                    <form action="{{ route('admin.delete-galeri', $item->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button class="text-red-600 text-xs font-semibold hover:text-red-800"
                                            onclick="return confirm('Hapus?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-sm text-gray-400">Belum ada video.</p>
                    @endforelse
                </div>
            </div>
        @endif
    </div>

    <!-- Modal Tambah Galeri -->
    <div id="modalGaleri" class="hidden fixed inset-0 z-[9999] flex items-center justify-center bg-black/50 p-4">
        <form id="formGaleri" action="{{ url('/admin/store-galeri') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-xl w-full max-w-md shadow-xl">
            @csrf
            <h2 id="modalTitle" class="text-xl font-bold mb-4">Tambah Media</h2>
            <div class="space-y-3">
                <input type="text" name="judul" id="judul" placeholder="Judul Media"
                    class="w-full border p-2 rounded" required>
                <select name="tipe" id="tipe" class="w-full border p-2 rounded" onchange="toggleInput()">
                    <option value="foto">Foto</option>
                    <option value="video">Video (Link YouTube)</option>
                </select>
                <input type="file" name="file_path" id="file_foto" class="w-full">
                <input type="text" name="url_video" id="url_video" placeholder="Link YouTube (Embed)"
                    class="w-full border p-2 rounded hidden">
                <div id="previewFoto" class="hidden mt-2">
                    <p class="text-xs text-gray-500">File saat ini:</p>
                    <img src="" id="imgPreview" class="w-20 h-20 object-cover mt-1">
                </div>
            </div>
            <div class="mt-4 flex justify-end gap-2">
                <button type="button" onclick="closeModal()" class="px-4 py-2 border rounded">Batal</button>
                <button type="submit" class="px-4 py-2 bg-emerald-600 text-white rounded">Simpan</button>
            </div>
        </form>
    </div>

    <script>
        function toggleInput() {
            const tipe = document.getElementById('tipe').value;
            const fileInput = document.getElementById('file_foto');
            const urlInput = document.getElementById('url_video');

            fileInput.classList.toggle('hidden', tipe === 'video');
            urlInput.classList.toggle('hidden', tipe === 'foto');
        }

        function openModal(mode, data = null) {
            const form = document.getElementById('formGaleri');
            const modal = document.getElementById('modalGaleri');
            const previewDiv = document.getElementById('previewFoto');

            form.reset();
            form.querySelectorAll('input[name="_method"]').forEach(el => el.remove());

            if (mode === 'create') {
                form.action = "{{ route('admin.store-galeri') }}";
                previewDiv.classList.add('hidden');
            } else {
                form.action = "/admin/update-galeri/" + data.id;

                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'PUT';
                form.appendChild(methodInput);

                document.getElementById('judul').value = data.judul;
                document.getElementById('tipe').value = data.tipe;
                document.getElementById('url_video').value = data.url_video || '';

                if (data.tipe === 'foto' && data.file_path) {
                    previewDiv.classList.remove('hidden');
                    document.getElementById('imgPreview').src = "/storage/" + data.file_path;
                } else {
                    previewDiv.classList.add('hidden');
                }
            }

            toggleInput();
            modal.classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modalGaleri').classList.add('hidden');
        }
    </script>
@endsection
