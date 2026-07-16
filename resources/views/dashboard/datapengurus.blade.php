@extends('layouts.dashboard')

@section('icon')
    <i class="fas fa-users-cog text-slate-900 mr-4 mt-1"></i>
@endsection
@section('title', 'Data Pengurus')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manajemen Kepengurusan</h2>
            <p class="text-gray-500 text-sm">Kelola data pengurus pondok pesantren di sini.</p>
        </div>

        <div>
            <button onclick="openCreateModal()"
                class="bg-emerald-600 text-white px-4 py-2 rounded-lg
                hover:bg-emerald-700">
                <i class="fas fa-plus mr-2"></i> Tambah Pengurus
            </button>
        </div>
    </div>

    <div id="modalPengurus"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden flex items-center justify-center p-4 z-50 overflow-y-auto">
        <div class="bg-white rounded-2xl w-full max-w-2xl shadow-2xl transform transition-all">
            <!-- Header -->
            <div class="bg-slate-800 text-white p-6 flex justify-between items-center rounded-t-2xl">
                <h3 class="font-bold text-lg tracking-wide">TAMBAH PENGURUS BARU</h3>
                <button onclick="closeModal('modalPengurus')"
                    class="text-white/70 hover:text-white transition text-2xl">&times;</button>
            </div>

            <form action="{{ route('admin.store-pengurus') }}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" name="nama" placeholder="Nama Lengkap"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition"
                            required>
                        <input type="text" name="jabatan" placeholder="Jabatan"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition"
                            required>

                        <select name="jenis_kelamin"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition">
                            <option value="">Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                        <input type="text" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition">

                        <input type="email" name="email" placeholder="Email"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition"
                            required>
                        <input type="number" name="no_hp" placeholder="Nomor HP"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition">

                        <input type="text" name="masa_bakti" placeholder="Masa Bakti (Contoh: 2025-2027)"
                            class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition"
                            required>
                    </div>

                    <textarea name="alamat" placeholder="Alamat Lengkap" rows="2"
                        class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 transition" required></textarea>
                </div>

                <!-- Footer -->
                <div class="p-6 bg-gray-50 rounded-b-2xl flex justify-end gap-3">
                    <button type="button" onclick="closeModal('modalPengurus')"
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
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Data Pengurus</h2>

            <form action="{{ route('admin.pengurus') }}" method="GET" class="flex gap-2">
                <input type="text" name="search" placeholder="Cari nama, kontak, alamat..."
                    class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 outline-none">
                <button type="submit" class="bg-slate-800 text-white px-4 py-2 rounded-lg hover:bg-slate-900">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th class="p-4">Foto</th>
                        <th class="p-4">Nama</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Jabatan</th>
                        <th class="p-4">Alamat</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y text-gray-700">
                    @foreach ($pengurus as $p)
                        <tr>
                            <td class="p-4 flex items-center gap-3">
                                @php
                                    $fotoPath = 'storage/profiles/' . $p->foto;
                                    $fotoTersedia = !empty($p->foto) && file_exists(public_path($fotoPath));
                                @endphp

                                <img src="{{ $fotoTersedia ? asset($fotoPath) : asset('storage/profiles/default.jpg') }}"
                                    alt="Foto {{ $p->nama }}" class="w-10 h-10 rounded-full object-cover">
                            </td>
                            <td class="p-4">{{ $p->nama }}</td>
                            <td class="p-4">{{ $p->email }}</td>
                            <td class="p-4">{{ $p->jabatan }}</td>
                            <td class="p-4">{{ $p->alamat }}</td>
                            <td class="p-4">
                                <button onclick='showDetail(@json($p))'
                                    class="text-blue-600 hover:text-blue-800 font-bold transition">
                                    Detail
                                </button>
                                <button class="text-blue-600 hover:underline ml-3">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="modalDetail" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
        <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden">
            <div class="bg-slate-800 text-white p-4 flex justify-between items-center">
                <span class="font-bold">PROFIL PENGURUS</span>
                <button onclick="closeModal('modalDetail')" class="text-xl">&times;</button>
            </div>
            <div class="p-6 text-center">
                <img id="mFoto" src="" alt="Foto"
                    class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-emerald-500"
                    onerror="this.onerror=null; this.src='{{ url('storage/profiles/default.jpg') }}';">
                <h2 id="mNama" class="text-xl font-bold text-slate-800"></h2>
                <span id="mJabatan" class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-bold"></span>

                <div class="mt-6 text-left border-t pt-4 space-y-3">
                    <div class="flex justify-between"><span>Jenis Kelamin</span> <span id="mJK"
                            class="font-semibold"></span></div>
                    <div class="flex justify-between"><span>Alamat</span> <span id="mAlamat"
                            class="font-semibold"></span>
                    </div>
                    <div class="flex justify-between"><span>Pendidikan</span> <span id="mPend"
                            class="font-semibold"></span></div>
                    <div class="flex justify-between"><span>Masa Bakti</span> <span id="mBakti"
                            class="font-semibold"></span></div>
                </div>
            </div>
            <div class="p-4 bg-gray-50 text-right">
                <button onclick="closeModal('modalDetail')"
                    class="bg-emerald-600 text-white px-6 py-2 rounded-lg">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        function openCreateModal() {
            document.getElementById('modalPengurus').classList.remove('hidden');
        }

        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

        function showDetail(p) {
            document.getElementById('mNama').innerText = p.nama || '-';
            document.getElementById('mJabatan').innerText = p.jabatan || '-';
            document.getElementById('mJK').innerText = p.jenis_kelamin || '-';
            document.getElementById('mAlamat').innerText = p.alamat || '-';
            document.getElementById('mPend').innerText = p.pendidikan_terakhir || '-';
            document.getElementById('mBakti').innerText = p.masa_bakti || '-';

            let baseUrl = "{{ asset('storage/profiles/') }}/";
            let fotoUrl = (p.foto) ? baseUrl + p.foto : baseUrl + "default.jpg";

            document.getElementById('mFoto').src = fotoUrl;

            // Membuka modal detail
            openModal('modalDetail');
        }
    </script>
@endsection
