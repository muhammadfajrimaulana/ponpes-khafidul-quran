@extends('layouts.dashboard')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Manajemen Kepengurusan</h2>
        <p class="text-gray-500 text-sm">Kelola data pengurus pondok pesantren di sini.</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Data Pengurus</h2>
            <button class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                <i class="fas fa-plus mr-2"></i> Tambah Pengurus
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
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
                                <img src="{{ asset('storage/' . $p->foto) }}" class="w-10 h-10 rounded-full object-cover">
                                {{ $p->nama }}
                            </td>
                            <td class="p-4">{{ $p->email }}</td>
                            <td class="p-4">{{ $p->jabatan }}</td>
                            <td class="p-4">{{ $p->alamat }}</td>
                            <td class="p-4">
                                <button onclick="showDetail('{{ json_encode($p) }}')"
                                    class="text-emerald-600 hover:underline font-bold">Detail</button>
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
                <img id="mFoto" src="" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-emerald-500">
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
        function showDetail(data) {
            let p = JSON.parse(data);
            document.getElementById('mNama').innerText = p.nama;
            document.getElementById('mJabatan').innerText = p.jabatan;
            document.getElementById('mJK').innerText = p.jenis_kelamin;
            document.getElementById('mAlamat').innerText = p.alamat;
            document.getElementById('mPend').innerText = p.pendidikan_terakhir;
            document.getElementById('mBakti').innerText = p.masa_bakti;
            document.getElementById('mFoto').src = '/storage/' + p.foto;
            document.getElementById('modalDetail').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modalDetail').classList.add('hidden');
        }
    </script>
@endsection
