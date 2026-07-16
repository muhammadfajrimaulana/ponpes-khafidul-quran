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
            <button class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                <i class="fas fa-plus mr-2"></i> Tambah Santri
            </button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <!-- Header & Pencarian -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <h2 class="text-2xl font-bold text-gray-800">Data Santri</h2>

            <form action="{{ route('admin.santri') }}" method="GET" class="flex gap-2">
                <input type="text" name="search" placeholder="Cari nama/kode..."
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
                        <th class="p-4">NISN</th>
                        <th class="p-4">Nama</th>
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
                            <td class="p-4 font-mono text-emerald-600">{{ $item->kode_santri }}</td>
                            <td class="p-4">{{ $item->nama_santri }}</td>
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
                        <span class="text-gray-500">Kode Santri</span>
                        <span id="sKode" class="font-mono text-emerald-600 font-bold"></span>
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
        function showSantriDetail(s) {

            console.log(s);

            let baseUrl = "{{ asset('storage/profiles/') }}/";
            let fotoUrl = s.foto ? baseUrl + s.foto : "{{ asset('storage/profiles/default.jpg') }}";

            document.getElementById('sFoto').src = fotoUrl;

            document.getElementById('sNama').innerText = s.nama_santri || '-';
            document.getElementById('sKode').innerText = s.kode_santri || '-';
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
