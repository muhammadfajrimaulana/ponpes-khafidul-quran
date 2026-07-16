@extends('layouts.dashboard')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Manajemen Santri</h2>
        <p class="text-gray-500 text-sm">Kelola data santri pondok pesantren di sini.</p>
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
                                @if ($item->foto)
                                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto {{ $item->nama }}"
                                        class="w-16 h-16 object-cover rounded-full">
                                @else
                                    <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16" />
                                @endif
                            </td>
                            <td class="p-4 font-mono text-emerald-600">{{ $item->kode_santri }}</td>
                            <td class="p-4">{{ $item->nama }}</td>
                            <td class="p-4">{{ $item->angkatan }}</td>
                            <td class="p-4">{{ $item->alamat }}</td>
                            <td class="p-4">
                                <span
                                    class="{{ $item->status == 'aktif' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }} px-2 py-1 rounded text-xs">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                            <td class="p-4">
                                <button onclick="showSantriDetail('{{ json_encode($item) }}')"
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
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">Nama Lengkap</span>
                        <span id="sNama" class="font-bold"></span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">Kode Santri</span>
                        <span id="sKode" class="font-mono text-emerald-600 font-bold"></span>
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
        function showSantriDetail(data) {
            let s = JSON.parse(data);
            document.getElementById('sNama').innerText = s.nama;
            document.getElementById('sKode').innerText = s.kode_santri;
            document.getElementById('sAngkatan').innerText = s.angkatan;
            document.getElementById('modalSantri').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modalSantri').classList.add('hidden');
        }
    </script>
@endsection
