@extends('layouts.dashboard')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Manajemen Alumni</h2>
        <p class="text-gray-500 text-sm">Kelola data alumni pondok pesantren di sini.</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <h2 class="text-2xl font-bold text-gray-800">Data Alumni</h2>

            <form action="{{ route('admin.alumni') }}" method="GET" class="flex gap-2">
                <select name="angkatan"
                    class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 outline-none">
                    <option value="">Semua Angkatan</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
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
                    @foreach ($alumni as $item)
                        <tr>
                            <td class="p-4">
                                <img src="{{ asset('storage/profiles/' . $item->foto) ?? asset('storage/profiles/default.jpg') }}"
                                    alt="Foto {{ $item->nama_santri }}" class="w-16 h-16 object-cover rounded-full">
                            </td>
                            <td class="p-4">{{ $item->nama }}</td>
                            <td class="p-4">{{ $item->tahun_lulus }}</td>
                            <td class="p-4">{{ $item->pekerjaan ?? $item->kampus }}</td>
                            <td class="p-4">
                                <button onclick="showAlumniDetail('{{ json_encode($item) }}')"
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

    <div id="modalAlumni" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
        <div class="bg-white rounded-2xl w-full max-w-lg overflow-hidden">
            <div class="bg-slate-800 text-white p-4 flex justify-between">
                <span class="font-bold">PROFIL ALUMNI</span>
                <button onclick="closeModal()" class="text-xl">&times;</button>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex justify-between border-b pb-2">
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
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-500">Alamat</span>
                        <span id="sAlamat" class="font-bold text-right italic"></span>
                    </div>
                </div>
            </div>
            <div class="p-4 bg-gray-50 text-right">
                <button onclick="closeModal()" class="bg-slate-800 text-white px-6 py-2 rounded-lg">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        function showAlumniDetail(data) {
            let s = JSON.parse(data);

            let baseUrl = "{{ asset('storage/profiles/') }}/";
            let fotoUrl = s.foto ? baseUrl + s.foto : "{{ asset('storage/profiles/default.jpg') }}";

            document.getElementById('sFoto').src = fotoUrl;
            document.getElementById('sNama').innerText = s.nama;
            document.getElementById('sKode').innerText = s.kode_santri || '-'; // Pastikan ambil dari s
            document.getElementById('sNamaWali').innerText = s.nama_wali;
            document.getElementById('sKontakWali').innerText = s.kontak_wali;

            document.getElementById('sAngkatan').innerText = s.angkatan;
            document.getElementById('sAlamat').innerText = s.alamat || '-';

            document.getElementById('modalAlumni').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modalAlumni').classList.add('hidden');
        }
    </script>
@endsection
