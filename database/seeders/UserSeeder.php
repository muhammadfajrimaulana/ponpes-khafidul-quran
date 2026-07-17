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
            'name' => 'Super Admin',
            'email' => 'admin@khafidulquran.com',
            'password' => Hash::make('min123'),
            'role' => 'super_admin',
            'is_verified' => 'Terverifikasi',
        ]);

        // User::factory()->count(10)->create();
    }
}
