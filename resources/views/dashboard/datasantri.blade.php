@extends('layouts.dashboard')

@section('icon')
    <i class="fas fa-user-graduate text-slate-900 mr-4 mt-1"></i>
@endsection
@section('title', 'Data Santri')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manajemen Santri</h2>
            <p class="text-gray-500 text-sm">Kelola data santri pondok pesantren di sini.</p>
        </div>

        <div>
            <button onclick="openCreateModal()" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                <i class="fas fa-plus mr-2"></i> Tambah Santri
            </button>
        </div>
    </div>

    <div id="modalCreateSantri"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden flex items-center justify-center p-4 z-50 overflow-y-auto">
        <div class="bg-white rounded-2xl w-full max-w-2xl shadow-2xl transform transition-all">
            <!-- Header -->
            <div class="bg-slate-800 text-white p-6 flex justify-between items-center rounded-t-2xl">
                <h3 class="font-bold text-lg tracking-wide">TAMBAH SANTRI BARU</h3>
                <button onclick="closeCreateModal('modalCreateSantri')"
                    class="text-white/70 hover:text-white transition text-2xl">&times;</button>
            </div>

            <form action="{{ route('admin.store-santri') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Form Body -->
                <div class="p-6 md:p-8 space-y-5">
                    <!-- Foto Upload (Gaya Modern) -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Pas Foto</label>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center border border-dashed border-gray-300">
                                <i class="fas fa-camera text-gray-400"></i>
                            </div>
                            <input type="file" name="foto"
                                class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 cursor-pointer">
                        </div>
                    </div>

                    <!-- Grid Input -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="nama_santri" placeholder="Nama Lengkap"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition"
                            required>
                        <input type="number" name="nisn" placeholder="NISN"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition"
                            required>
                        <select name="kelas"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition">
                            <option value="">Kelas</option>
                            <option value="1 MTs">VII / 1 MTs</option>
                            <option value="2 MTs">VIII / 2 MTs</option>
                            <option value="3 MTs">IX / 3 MTs</option>
                            <option value="1 MA">X / 1 MA</option>
                            <option value="2 MA">XI / 2 MA</option>
                            <option value="3 MA">XII / 3 MA</option>
                        </select>

                        <input type="number" name="angkatan" placeholder="Angkatan"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition">

                        <input type="text" name="nama_wali" placeholder="Nama Wali"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition"
                            required>
                        <input type="number" name="kontak_wali" placeholder="Kontak Wali"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition">
                    </div>

                    <textarea name="alamat" placeholder="Alamat Lengkap" rows="2"
                        class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition" required></textarea>
                </div>

                <!-- Footer -->
                <div class="p-6 bg-gray-50 rounded-b-2xl flex justify-end gap-3">
                    <button type="button" onclick="closeCreateModal('modalCreateSantri')"
                        class="px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-200 transition">Batal</button>
                    <button type="submit"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-2 rounded-lg shadow-lg hover:shadow-emerald-500/30 transition-all font-bold">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <!-- Header & Pencarian -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <h2 class="text-2xl font-bold text-gray-800">Data Santri</h2>

            <form action="{{ route('admin.santri') }}" method="GET" class="flex gap-2">
                <input type="text" name="search" placeholder="Cari nama, kelas, angkatan, alamat santri..."
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
                        <th class="p-4">Foto</th>
                        <th class="p-4">Nama</th>
                        <th class="p-4">Kelas</th>
                        <th class="p-4">Angkatan</th>
                        <th class="p-4">Alamat</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y text-gray-700">
                    @foreach ($santri as $item)
                        <tr>
                            <td class="p-4">
                                @php
                                    $fotoPath = 'storage/profiles/' . $item->foto;
                                    $fotoTersedia = !empty($item->foto) && file_exists(public_path($fotoPath));
                                @endphp

                                <img src="{{ $fotoTersedia ? asset($fotoPath) : asset('storage/profiles/default.jpg') }}"
                                    alt="Foto {{ $item->nama_santri }}" class="w-10 h-10 rounded-full object-cover">
                            </td>
                            <td class="p-4">{{ $item->nama_santri }}</td>
                            <td class="p-4">{{ $item->kelas }}</td>
                            <td class="p-4">{{ $item->angkatan }}</td>
                            <td class="p-4">{{ $item->alamat }}</td>
                            <td class="p-4">
                                <span
                                    class="{{ $item->status == 'aktif' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }} px-2 py-1 rounded text-xs">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                            <td class="p-4">
                                <button onclick='showSantriDetail(@json($item))'
                                    class="text-blue-600 hover:text-blue-800 font-bold transition">
                                    Detail
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="modalSantri" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
        <div class="bg-white rounded-2xl w-full max-w-lg overflow-hidden">
            <div class="bg-slate-800 text-white p-4 flex justify-between">
                <span class="font-bold">PROFIL SANTRI</span>
                <button onclick="closeModal()" class="text-xl">&times;</button>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex justify-center border-b pb-4">
                        <img id="sFoto" src="" alt="Foto" class="w-24 h-24 object-cover rounded-full">
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">Nama Lengkap</span>
                        <span id="sNama" class="font-bold"></span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">NISN</span>
                        <span id="sNisn" class="font-mono text-emerald-600 font-bold"></span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">Kelas</span>
                        <span id="sKelas" class="font-bold"></span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">Nama Wali</span>
                        <span id="sNamaWali" class="font-bold"></span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">Kontak Wali</span>
                        <span id="sKontakWali" class="font-bold"></span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">Angkatan</span>
                        <span id="sAngkatan" class="font-bold"></span>
                    </div>
                </div>
            </div>
            <div class="p-4 bg-gray-50 text-right">
                <button onclick="closeModal()" class="bg-slate-800 text-white px-6 py-2 rounded-lg">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        function openCreateModal() {
            document.getElementById('modalCreateSantri').classList.remove('hidden');
        }

        function closeCreateModal() {
            document.getElementById('modalCreateSantri').classList.add('hidden');
        }

        function showSantriDetail(s) {

            let baseUrl = "{{ asset('storage/profiles/') }}/";
            let fotoUrl = s.foto ? baseUrl + s.foto : "{{ asset('storage/profiles/default.jpg') }}";

            document.getElementById('sFoto').src = fotoUrl;

            document.getElementById('sNama').innerText = s.nama_santri || '-';
            document.getElementById('sNisn').innerText = s.nisn || '-';
            document.getElementById('sKelas').innerText = s.kelas || '-';
            document.getElementById('sNamaWali').innerText = s.nama_wali || '-';
            document.getElementById('sKontakWali').innerText = s.kontak_wali || '-';
            document.getElementById('sAngkatan').innerText = s.angkatan || '-';

            document.getElementById('modalSantri').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modalSantri').classList.add('hidden');
        }
    </script>
@endsection
