<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'thumbnail' => $this->faker->imageUrl(640, 480, 'news', true),
            'judul' => $this->faker->sentence(),
            'isi' => $this->faker->paragraph(),
            'kategori' => $this->faker->randomElement(['Berita', 'Artikel', 'Kajian']),
            'penulis' => $this->faker->name(),
        ];
    }
}
