<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumniFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'kode_santri' => $this->faker->unique()->numerify('S-#####'),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => $this->faker->address(),
            'angkatan' => $this->faker->year(),
            'foto' => $this->faker->imageUrl(640, 480, 'people', true),
            'nama_wali' => $this->faker->name(),
            'kontak_wali' => $this->faker->phoneNumber(),
            'pekerjaan' => $this->faker->jobTitle(),
            'kampus' => $this->faker->company(),
            'tahun_lulus' => $this->faker->year(),
        ];
    }
}
