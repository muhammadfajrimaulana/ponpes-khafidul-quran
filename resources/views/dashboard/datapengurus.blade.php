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
                        <th class="p-4">Status</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y text-gray-700">
                    @foreach ($pengurus as $u)
                        <tr>
                            <!-- Akses foto dari relasi $u->pengurus -->
                            <td class="p-4">
                                <img src="{{ $u->pengurus && $u->pengurus->foto ? asset('storage/profiles/' . $u->pengurus->foto) : asset('storage/profiles/default.jpg') }}"
                                    class="w-10 h-10 rounded-full object-cover">
                            </td>
                            <td class="p-4">{{ $u->name }}</td>
                            <td class="p-4">{{ $u->email }}</td>

                            <!-- Status sekarang langsung dari tabel users -->
                            <td class="p-4">
                                @if ($u->is_verified === 'Terverifikasi')
                                    <span
                                        class="bg-green-500 text-white px-3 py-1 rounded-full text-xs">Terverifikasi</span>
                                @elseif ($u->is_verified === 'Verifikasi Ditolak')
                                    <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs">Ditolak</span>
                                @else
                                    <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-xs">Menunggu</span>
                                @endif
                            </td>

                            <td class="p-4">
                                <!-- Tombol Aksi -->
                                <div class="flex gap-2">
                                    <button onclick="showDetail({{ $u->pengurus ? $u->pengurus->toJson() : '{}' }})"
                                        class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button onclick="showEditForm({{ $u->toJson() }})"
                                        class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600 transition">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    @if ($pengurus->isEmpty())
                        <tr>
                            <td colspan="6" class="p-4 text-center text-gray-400">Belum ada data pengurus saat ini.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal Detail --}}
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
                    <div class="flex justify-between"><span>Nomor HP</span> <span id="mNoHP"
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

    {{-- Modal Edit --}}
    <div id="modalEdit" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
        <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden">
            <div class="bg-slate-800 text-white p-4 flex justify-between items-center">
                <span class="font-bold">EDIT PENGURUS</span>
                <button onclick="closeModal('modalEdit')" class="text-xl">&times;</button>
            </div>
            <div class="p-6">
                <!-- Form for editing pengurus data -->
                <form id="editPengurusForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="space-y-4">
                        <input type="text" name="nama" id="eNama" class="w-full border-gray-300 rounded-lg"
                            required>
                        <input type="text" name="jabatan" id="eJabatan" class="w-full border-gray-300 rounded-lg"
                            required>

                        <select name="jenis_kelamin" id="eJK" class="w-full border-gray-300 rounded-lg">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                        <input type="text" name="pendidikan_terakhir" id="ePend"
                            class="w-full border-gray-300 rounded-lg">
                        <input type="email" name="email" id="eEmail" class="w-full border-gray-300 rounded-lg"
                            required>
                        <input type="number" name="no_hp" id="eNoHP" class="w-full border-gray-300 rounded-lg">
                        <input type="text" name="masa_bakti" id="eBakti" class="w-full border-gray-300 rounded-lg"
                            required>

                        <!-- Pastikan textarea ditutup dengan benar -->
                        <textarea name="alamat" id="eAlamat" rows="2" class="w-full border-gray-300 rounded-lg"></textarea>
                        <select name="status" id="eStatus" class="w-full border-gray-300 rounded-lg">
                            <option value="Terverifikasi">Terverifikasi</option>
                            <option value="Verifikasi Ditolak">Verifikasi Ditolak</option>
                            <option value="Menunggu Verifikasi">Menunggu Verifikasi</option>
                        </select>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="mt-6 flex justify-end gap-3">
                        <button type="button" onclick="closeModal('modalEdit')"
                            class="px-4 py-2 text-gray-600">Batal</button>
                        <button type="submit" class="bg-emerald-600 text-white px-6 py-2 rounded-lg font-bold">Simpan
                        </button>
                    </div>
                </form>
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
            document.getElementById('mNoHP').innerText = p.no_hp || '-';
            document.getElementById('mPend').innerText = p.pendidikan_terakhir || '-';
            document.getElementById('mBakti').innerText = p.masa_bakti || '-';

            let baseUrl = "{{ asset('storage/profiles/') }}/";
            let fotoUrl = (p.foto) ? baseUrl + p.foto : baseUrl + "default.jpg";

            document.getElementById('mFoto').src = fotoUrl;

            // Membuka modal detail
            openModal('modalDetail');
        }


        function showEditForm(user) {
            document.getElementById('modalEdit').classList.remove('hidden');

            document.getElementById('eNama').value = user.name;
            document.getElementById('eEmail').value = user.email;
            document.getElementById('eStatus').value = user.is_verified;

            if (user.pengurus) {
                document.getElementById('eJabatan').value = user.pengurus.jabatan || '';
                document.getElementById('eJK').value = user.pengurus.jenis_kelamin || '';
                document.getElementById('ePend').value = user.pengurus.pendidikan_terakhir || '';
                document.getElementById('eNoHP').value = user.pengurus.no_hp || ''; // Ini yang tadi kosong
                document.getElementById('eBakti').value = user.pengurus.masa_bakti || '';
                document.getElementById('eAlamat').value = user.pengurus.alamat || '';
            }

            let form = document.getElementById('editPengurusForm');
            let url = "{{ url('admin/update-pengurus') }}/" + user.id;

            form.action = url;
        }
    </script>
@endsection
