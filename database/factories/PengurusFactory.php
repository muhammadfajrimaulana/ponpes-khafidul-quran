<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengurusFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'jabatan' => $this->faker->jobTitle(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => $this->faker->address(),
            'foto' => $this->faker->imageUrl(640, 480, 'people', true),
            'visi' => $this->faker->paragraph(),
            'keahlian' => 'Manajemen, Administrasi, Pendidikan',
            'pendidikan_terakhir' => $this->faker->randomElement(['S1', 'S2', 'S3']),
            'masa_bakti' => '2025-2027',
        ];
    }
}
