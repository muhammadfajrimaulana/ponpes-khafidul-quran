<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_santri' => $this->faker->name(),
            'kode_santri' => $this->faker->unique()->numerify('S-#####'),
            'kode_sandi' => $this->faker->password(8, 16),
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
