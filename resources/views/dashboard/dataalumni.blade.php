@extends('layouts.dashboard')

@section('icon')
    <i class="fas fa-user-clock text-slate-900 mr-4 mt-1"></i>
@endsection
@section('title', 'Data Alumni')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Manajemen Alumni</h2>
        <p class="text-gray-500 text-sm">Kelola data alumni pondok pesantren di sini.</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <h2 class="text-2xl font-bold text-gray-800">Data Alumni</h2>

            <form action="{{ route('admin.alumni') }}" method="GET" class="flex gap-2">
                <input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Cari nama, pekerjaan, alamat alumni..."
                    class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 outline-none">

                <select name="angkatan"
                    class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 outline-none">
                    <option value="">Semua Angkatan</option>

                    @foreach (range(2012, 2026) as $tahun)
                        <option value="{{ $tahun }}" {{ request('angkatan') == $tahun ? 'selected' : '' }}>
                            {{ $tahun }}
                        </option>
                    @endforeach
                </select>

                <button type="submit" class="bg-slate-800 text-white px-4 py-2 rounded-lg hover:bg-slate-900">
                    <i class="fas fa-filter"></i> Filter
                </button>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th class="p-4">Foto</th>
                        <th class="p-4">Nama Alumni</th>
                        <th class="p-4">Tahun Lulus</th>
                        <th class="p-4">Pekerjaan/Pendidikan Sekarang</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y text-gray-700">
                    @forelse ($alumni as $item)
                        <tr>
                            <td class="p-4">
                                @php
                                    $fotoPath = 'storage/profiles/' . $item->foto;
                                    $fotoTersedia = !empty($item->foto) && file_exists(public_path($fotoPath));
                                @endphp

                                <img src="{{ $fotoTersedia ? asset($fotoPath) : asset('storage/profiles/default.jpg') }}"
                                    alt="Foto {{ $item->nama }}" class="w-10 h-10 rounded-full object-cover">
                            </td>
                            <td class="p-4">{{ $item->nama_santri }}</td>
                            <td class="p-4">{{ $item->alumni->tahun_lulus ?? '-' }}</td>
                            <td class="p-4">{{ $item->alumni->pekerjaan ?? ($item->alumni->kampus ?? '-') }}</td>
                            <td class="p-4">
                                <button onclick='showAlumniDetail(@json($item)); toggleEdit(true);'
                                    class="text-yellow-600 hover:text-yellow-800 font-bold transition mr-4">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick='showAlumniDetail(@json($item))'
                                    class="text-blue-600 hover:text-blue-800 font-bold transition">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-4 text-center text-gray-400">
                                @if (request()->has('search') || request()->has('angkatan'))
                                    Data alumni yang Anda cari tidak ditemukan.
                                @else
                                    Belum ada data alumni saat ini.
                                @endif
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal Detail Alumni --}}
    <div id="modalAlumni" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
        <div class="bg-white rounded-2xl w-full max-w-lg overflow-hidden">
            <div id="viewDetail">
                <div class="bg-slate-800 text-white p-4 flex justify-between">
                    <span class="font-bold">PROFIL ALUMNI</span>
                    <button onclick="closeModal()" class="text-xl">&times;</button>
                </div>
                <div class="p-6 space-y-4">
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
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">Alamat</span>
                        <span id="sAlamat" class="font-bold text-right italic"></span>
                    </div>
                </div>
                <div class="p-4 bg-gray-50 text-right space-x-2">
                    <button onclick="closeModal()" class="bg-slate-800 text-white px-6 py-2 rounded-lg">Tutup</button>
                </div>
            </div>

            {{-- Form Modal Edit --}}
            <form id="formEditAlumni" action="" method="POST" class="hidden p-6 space-y-5">
                @csrf
                @method('PUT')

                <div class="border-b pb-3">
                    <h3 class="text-lg font-bold text-slate-800">Edit Data Alumni</h3>
                    <p class="text-xs text-gray-500">Update informasi karier atau pendidikan alumni.</p>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Tahun Lulus</label>
                        <input type="number" name="tahun_lulus" id="eTahunLulus"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition outline-none"
                            placeholder="Contoh: 2025">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Pekerjaan / Instansi</label>
                        <input type="text" name="pekerjaan" id="ePekerjaan"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition outline-none"
                            placeholder="Contoh: Developer / Universitas Indonesia">
                    </div>
                </div>

                <div class="flex justify-end gap-3 pt-4 border-t">
                    <button type="button" onclick="event.preventDefault(); toggleEdit(false);"
                        class="px-5 py-2 text-gray-600 hover:bg-gray-100 font-medium rounded-lg transition">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm transition transform active:scale-95">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>

    <script>
        // Fungsi untuk membuka detail
        function showAlumniDetail(s) {
            let baseUrl = "{{ asset('storage/profiles/') }}/";
            let fotoUrl = s.foto ? baseUrl + s.foto : "{{ asset('storage/profiles/default.jpg') }}";

            document.getElementById('sFoto').src = fotoUrl;
            document.getElementById('sNama').innerText = s.nama_santri || '-';
            document.getElementById('sNisn').innerText = s.nisn || '-';
            document.getElementById('sNamaWali').innerText = s.nama_wali || '-';
            document.getElementById('sKontakWali').innerText = s.kontak_wali || '-';
            document.getElementById('sAngkatan').innerText = s.tahun_lulus || s.angkatan || '-';
            document.getElementById('sAlamat').innerText = s.alamat || '-';

            prepareEditForm(s);

            document.getElementById('viewDetail').classList.remove('hidden');
            document.getElementById('formEditAlumni').classList.add('hidden');

            document.getElementById('modalAlumni').classList.remove('hidden');
        }

        // Fungsi untuk mengisi form edit
        function prepareEditForm(s) {
            document.getElementById('formEditAlumni').action = "/admin/alumni/" + s.id;

            document.getElementById('eTahunLulus').value = s.tahun_lulus || '';
            document.getElementById('ePekerjaan').value = s.pekerjaan || '';
        }

        function closeModal() {
            document.getElementById('modalAlumni').classList.add('hidden');
        }

        function toggleEdit(isEdit) {
            document.getElementById('viewDetail').classList.toggle('hidden', isEdit);
            document.getElementById('formEditAlumni').classList.toggle('hidden', !isEdit);
        }
    </script>
@endsection
