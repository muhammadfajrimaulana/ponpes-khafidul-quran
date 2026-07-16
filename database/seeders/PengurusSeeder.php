<?php

namespace Database\Seeders;

use App\Models\Pengurus;
use Illuminate\Database\Seeder;

class PengurusSeeder extends Seeder
{
    public function run(): void
    {
        Pengurus::factory()->count(10)->create();
    }
}
