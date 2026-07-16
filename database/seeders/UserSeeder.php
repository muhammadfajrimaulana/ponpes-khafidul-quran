<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Super Admin
        User::create([
            'name' => 'Super Admin Ponpes',
            'email' => 'admin@khafidulquran.com',
            'password' => Hash::make('password123'),
            'role' => 'super_admin',
            'is_verified' => true,
        ]);

        // Buat Akun Pengurus untuk Testing
        User::create([
            'name' => 'Pengurus Testing',
            'email' => 'pengurus@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'pengurus',
            'is_verified' => false,
        ]);
    }
}
