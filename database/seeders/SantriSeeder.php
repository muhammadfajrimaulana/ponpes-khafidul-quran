<?php

namespace Database\Seeders;

use App\Models\Santri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SantriSeeder extends Seeder
{
    public function run(): void
    {
        Santri::factory()->count(10)->create();
    }
}
