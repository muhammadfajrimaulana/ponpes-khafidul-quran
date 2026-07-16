<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_santri' => $this->faker->name(),
            'nisn' => $this->faker->unique()->numerify('######'),
            'kelas' => $this->faker->randomElement(['X / 1 MA', 'XI / 2 MA', 'XII / 3 MA', 'VII / 1 MTs', 'VIII / 2 MTs', 'IX / 3 MTs']),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => $this->faker->address(),
            'status' => $this->faker->randomElement(['aktif', 'alumni']),
            'angkatan' => $this->faker->year(),
            'foto' => $this->faker->imageUrl(640, 480, 'people', true),
            'nama_wali' => $this->faker->name(),
            'kontak_wali' => $this->faker->phoneNumber(),
        ];
    }
}
