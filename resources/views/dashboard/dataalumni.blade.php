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
                        <th class="p-4">Nama Alumni</th>
                        <th class="p-4">Tahun Lulus</th>
                        <th class="p-4">Pekerjaan/Pendidikan Sekarang</th>
                    </tr>
                </thead>
                <tbody class="divide-y text-gray-700">
                    <tr>
                        <td class="p-4">Budi Santoso</td>
                        <td class="p-4">2022</td>
                        <td class="p-4">Mahasiswa UIN</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
