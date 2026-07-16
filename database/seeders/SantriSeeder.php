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
                'nama_santri' => 'Maulana Nur Rahman',
                'kode_santri' => 'SN001',
                'kode_sandi'  => Hash::make('password123'), // Selalu gunakan hash untuk password/sandi
                'angkatan'    => '2025',
                'status'      => 'aktif',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nama_santri' => 'Muthia Nur Aulia',
                'kode_santri' => 'SN002',
                'kode_sandi'  => Hash::make('password123'),
                'angkatan'    => '2025',
                'status'      => 'aktif',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nama_santri' => 'Budi Santoso',
                'kode_santri' => 'AL001',
                'kode_sandi'  => Hash::make('password123'),
                'angkatan'    => '2022',
                'status'      => 'alumni',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
