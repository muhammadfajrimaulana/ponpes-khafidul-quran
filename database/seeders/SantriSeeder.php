<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SantriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('santris')->insert([
            [
                'nama_santri' => 'Maulana Nur Fauzi',
                'foto'        => 'default.jpg',
                'kode_santri' => 'SN001',
                'kode_sandi'  => Hash::make('12345678'),
                'nama_wali'   => 'Bpk. Ahmad Fauzi',
                'kontak_wali' => '081234567890',
                'angkatan'    => '2025',
                'alamat'      => 'Parung, Bogor, Jawa Barat',
                'status'      => 'aktif',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nama_santri' => 'Muthia Nur Aulia',
                'foto'        => 'default.jpg',
                'kode_santri' => 'SN002',
                'kode_sandi'  => Hash::make('87654321'),
                'nama_wali'   => 'Ibu Fatimah',
                'kontak_wali' => '085712345678',
                'angkatan'    => '2025',
                'alamat'      => 'Pemalang, Jawa Tengah',
                'status'      => 'aktif',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nama_santri' => 'Budi Santoso',
                'foto'        => 'default.jpg',
                'kode_santri' => 'AL001',
                'kode_sandi'  => Hash::make('password'),
                'nama_wali'   => 'Bpk. Sugeng',
                'kontak_wali' => '081398765432',
                'angkatan'    => '2022',
                'alamat'      => 'Solo, Jawa Tengah',
                'status'      => 'alumni',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
