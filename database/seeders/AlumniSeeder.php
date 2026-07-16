<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumniSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('alumnis')->insert([
            [
                'nama'        => 'Budi Santoso',
                'foto'        => 'default.jpg',
                'angkatan'    => '2022',
                'nama_wali'   => 'Pak Harto',
                'kontak_wali' => '081234567890',
                'tahun_lulus' => '2025',
                'pekerjaan'   => 'Web Developer',
                'kampus'      => 'UNUSIA',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nama'        => 'Siti Aminah',
                'foto'        => 'default.jpg',
                'angkatan'    => '2021',
                'nama_wali'   => 'Ibu Fatimah',
                'kontak_wali' => '089876543210',
                'tahun_lulus' => '2024',
                'pekerjaan'   => 'Guru',
                'kampus'      => 'UIN Jakarta',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
