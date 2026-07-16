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
            <button class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                <i class="fas fa-plus mr-2"></i> Tambah Pengurus
            </button>
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
                <span class="font-bold">DETAIL PROFIL PENGURUS</span>
                <button onclick="closeModal()" class="text-xl">&times;</button>
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
                    <div class="flex justify-between"><span>Alamat</span> <span id="mAlamat" class="font-semibold"></span>
                    </div>
                    <div class="flex justify-between"><span>Pendidikan</span> <span id="mPend"
                            class="font-semibold"></span></div>
                    <div class="flex justify-between"><span>Masa Bakti</span> <span id="mBakti"
                            class="font-semibold"></span></div>
                </div>
            </div>
            <div class="p-4 bg-gray-50 text-right">
                <button onclick="closeModal()" class="bg-emerald-600 text-white px-6 py-2 rounded-lg">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        function showDetail(p) {
            document.getElementById('mNama').innerText = p.nama || '-';
            document.getElementById('mJabatan').innerText = p.jabatan || '-';
            document.getElementById('mJK').innerText = p.jenis_kelamin || '-';
            document.getElementById('mAlamat').innerText = p.alamat || '-';
            document.getElementById('mPend').innerText = p.pendidikan_terakhir || '-';
            document.getElementById('mBakti').innerText = p.masa_bakti || '-';

            let baseUrl = window.location.origin + "/ponpes-khafidul-quran/public/storage/profiles/";

            let fotoUrl = (p.foto && p.foto !== null) ?
                baseUrl + p.foto :
                baseUrl + "default.jpg";

            console.log("URL Gambar:", fotoUrl);

            let imgElement = document.getElementById('mFoto');
            imgElement.src = fotoUrl;

            document.getElementById('modalDetail').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modalDetail').classList.add('hidden');
        }
    </script>
@endsection
