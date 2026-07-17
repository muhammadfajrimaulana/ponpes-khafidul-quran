@extends('layouts.dashboard')

@section('icon')
    <i class="fas fa-chart-line text-slate-900 mr-4 mt-1"></i>
@endsection
@section('title', 'Dashboard')

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

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

        <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-gray-700">Santri Terbaru</h3>
                @if (Auth::user()->role === 'super_admin' || Auth::user()->role === 'pengurus')
                    <a href="{{ route('admin.santri') }}"
                        class="bg-yellow-50 text-yellow-700 text-sm hover:bg-yellow-100 px-4 py-2 rounded-lg">Lihat
                        Semua</a>
                @endif
            </div>
            <table class="w-full text-left">
                <thead>
                    <tr class="text-gray-400 text-sm border-b">
                        <th class="pb-3">Foto</th>
                        <th class="pb-3">Nama</th>
                        <th class="pb-3">Kelas</th>
                        <th class="pb-3">Angkatan</th>
                        <th class="pb-3">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach ($santri as $s)
                        <tr>
                            <td class="p-4">
                                @php
                                    $fotoPath = 'storage/profiles/' . $s->foto;
                                    $fotoTersedia = !empty($s->foto) && file_exists(public_path($fotoPath));
                                @endphp

                                <img src="{{ $fotoTersedia ? asset($fotoPath) : asset('storage/profiles/default.jpg') }}"
                                    alt="Foto {{ $s->nama_santri }}" class="w-10 h-10 rounded-full object-cover">
                            </td>
                            <td class="py-4">{{ $s->nama_santri }}</td>
                            <td class="py-4">{{ $s->kelas }}</td>
                            <td class="py-4">{{ $s->angkatan }}</td>
                            <td class="py-4">
                                @if ($s->status === 'aktif')
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Aktif</span>
                                @else
                                    <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">Alumni</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    @if ($santri->isEmpty())
                        <tr>
                            <td colspan="5" class="p-4 text-center text-gray-400">Belum ada data santri saat ini.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <h3 class="font-bold text-gray-700 mb-6">Aksi Cepat</h3>
            <div class="space-y-3">
                <button onclick="openTambahSantriModal()"
                    class="w-full text-left bg-emerald-50 text-emerald-700 p-3 rounded-lg hover:bg-emerald-100 transition">
                    <i class="fas fa-plus mr-2"></i> Tambah Santri
                </button>

                <button onclick="openTambahKajianModal()"
                    class="w-full text-left bg-blue-50 text-blue-700 p-3 rounded-lg hover:bg-blue-100 transition">
                    <i class="fas fa-book mr-2"></i> Buat Berita Baru
                </button>

                <button onclick="openUploadVideoModal()"
                    class="w-full text-left bg-purple-50 text-purple-700 p-3 rounded-lg hover:bg-purple-100 transition">
                    <i class="fas fa-video mr-2"></i> Upload Video Galeri
                </button>
            </div>
        </div>

        <div id="modalSantri" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
            <div class="bg-white rounded-2xl w-full max-w-lg overflow-hidden">
                <div class="bg-slate-800 text-white p-4 flex justify-between">
                    <span class="font-bold">TAMBAH SANTRI</span>
                    <button onclick="closeModal('modalSantri')">&times;</button>
                </div>
                <form action="{{ route('admin.store-santri') }}" method="POST">
                    @csrf
                    <div class="p-6 space-y-4">
                        <div>
                            <label for="foto" class="text-gray-400">Upload Pas Foto</label>
                            <input type="file" name="foto" class="w-full border p-2 mt-2 rounded" required>
                        </div>
                        <input type="text" name="nama_santri" placeholder="Nama Lengkap"
                            class="w-full border p-2 rounded" required>
                        <input type="text" name="nama_wali" placeholder="Nama Wali" class="w-full border p-2 rounded">
                        <input type="number" name="kontak_wali" placeholder="Kontak Wali"
                            class="w-full border p-2 rounded">
                        <input type="number" name="angkatan" placeholder="Angkatan" maxlength="4" minlength="4"
                            class="w-full border p-2 rounded" required>
                        <textarea name="alamat" placeholder="Alamat" class="w-full border p-2 rounded" required></textarea>

                    </div>
                    <div class="p-4 bg-gray-50 text-right">
                        <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="modalKajian" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
            <div class="bg-white rounded-2xl w-full max-w-lg overflow-hidden">
                <div class="bg-blue-600 text-white p-4 flex justify-between">
                    <span class="font-bold">BUAT BERITA BARU</span>
                    <button onclick="closeModal('modalKajian')">&times;</button>
                </div>
                <form action="{{ route('admin.store-berita') }}" method="POST">
                    @csrf
                    <div class="p-6 space-y-4">
                        <input type="text" name="judul_berita" placeholder="Judul Berita"
                            class="w-full border p-2 rounded" required>
                        <textarea name="deskripsi" placeholder="Deskripsi" class="w-full border p-2 rounded"></textarea>
                    </div>
                    <div class="p-4 bg-gray-50 text-right">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="modalVideo" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
            <div class="bg-white rounded-2xl w-full max-w-lg overflow-hidden">
                <div class="bg-purple-600 text-white p-4 flex justify-between">
                    <span class="font-bold">UPLOAD VIDEO GALERI</span>
                    <button onclick="closeModal('modalVideo')">&times;</button>
                </div>
                <form action="{{ route('admin.store-galeri') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 space-y-4">
                        <input type="text" name="judul_video" placeholder="Judul Video"
                            class="w-full border p-2 rounded" required>
                        <input type="file" name="video_file" class="w-full border p-2 rounded" required>
                    </div>
                    <div class="p-4 bg-gray-50 text-right">
                        <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openTambahSantriModal() {
            openModal('modalSantri');
        }

        function openTambahKajianModal() {
            openModal('modalKajian');
        }

        function openUploadVideoModal() {
            openModal('modalVideo');
        }

        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }
    </script>
@endsection
