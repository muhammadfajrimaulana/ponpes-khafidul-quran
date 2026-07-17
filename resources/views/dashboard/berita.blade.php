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
            <button onclick="openModal('create')" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
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
                    <input type="text" name="search" placeholder="Cari judul berita, artikel atau kajian..."
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

                        <div class="mt-4">
                            @php
                                $fotoPath = 'storage/thumbnails/' . $item->thumbnail;
                                $fotoTersedia = !empty($item->thumbnail) && file_exists(public_path($fotoPath));
                            @endphp

                            <img src="{{ $fotoTersedia ? asset($fotoPath) : asset('storage/thumbnails/default.png') }}"
                                alt="Thumbnail {{ $item->judul }}" class="w-full h-auto rounded-lg object-cover">
                        </div>

                        <h3 class="font-bold text-gray-800 mt-3 leading-snug">{{ $item->judul }}</h3>
                        <p class="text-gray-500 text-xs mt-2 italic">
                            {{ $item->kategori == 'berita' ? $item->created_at->format('d M Y') : 'Oleh: ' . $item->penulis }}
                        </p>

                        <p class="text-gray-600 text-sm mt-2">
                            {{ Str::limit($item->isi, 50) }}
                        </p>

                        <div class="mt-4 pt-4 border-t flex justify-between">
                            <button onclick='openModal("edit", {!! json_encode($item) !!})'
                                class="text-blue-600 text-xs font-semibold hover:text-blue-800">
                                Edit
                            </button>
                            <form action="{{ route('admin.delete-berita', $item->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button class="text-red-600 text-xs font-semibold hover:text-red-800"
                                    onclick="return confirm('Hapus?')">Hapus</button>
                            </form>
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

    {{-- Modal Tambah Berita --}}
    <div id="modalBerita" class="hidden fixed inset-0 z-[9999] flex items-center justify-center bg-black/50 p-4">
        <form id="formBerita" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-xl w-full max-w-lg shadow-xl">
            @csrf

            <h2 id="modalTitle" class="text-xl font-bold mb-4">Tambah Konten</h2>

            <div class="space-y-3">
                <input type="file" name="thumbnail" class="w-full">
                <input type="text" name="judul" id="judul" placeholder="Judul" class="w-full border p-2 rounded"
                    required>
                <select name="kategori" id="kategori" class="w-full border p-2 rounded">
                    <option value="berita">Kabar Pondok</option>
                    <option value="kajian">Artikel & Kajian</option>
                </select>
                <textarea name="isi" id="isi" placeholder="Isi Konten" class="w-full border p-2 rounded h-32"></textarea>
                <input type="text" name="penulis" id="penulis" placeholder="Penulis" class="w-full border p-2 rounded"
                    required>
            </div>

            <div class="mt-4 flex justify-end gap-2">
                <button type="button" onclick="closeModal()" class="px-4 py-2 border rounded">Batal</button>
                <button type="button" onclick="submitForm()" class="px-4 py-2 bg-emerald-600 text-white rounded">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <script>
        const modal = document.getElementById('modalBerita');
        const form = document.getElementById('formBerita');

        function openModal(mode, data = null) {
            // Hapus input _method lama
            form.querySelectorAll('input[name="_method"]').forEach(el => el.remove());

            if (mode === 'create') {
                document.getElementById('modalTitle').innerText = 'Tambah Konten';
                form.action = "{{ route('admin.store-berita') }}";
                form.reset();
            } else {
                document.getElementById('modalTitle').innerText = 'Edit Konten';
                form.action = "/admin/update-berita/" + data.id;

                // Tambah input _method PUT
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'PUT';
                form.appendChild(methodInput);

                document.getElementById('judul').value = data.judul;
                document.getElementById('kategori').value = data.kategori;
                document.getElementById('isi').value = data.isi;
                document.getElementById('penulis').value = data.penulis;
            }
            modal.classList.remove('hidden');
        }

        function closeModal() {
            modal.classList.add('hidden');
        }

        // Klik di luar modal untuk tutup
        modal.addEventListener('click', function(e) {
            if (e.target === modal) closeModal();
        });

        // ESC untuk tutup
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });

        function submitForm() {
            if (form.action.includes('store-berita')) {
                form.querySelectorAll('input[name="_method"]').forEach(el => el.remove());
            }
            form.submit();
        }
    </script>
@endsection
