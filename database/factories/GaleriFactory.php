<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GaleriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(),
            'tipe' => $this->faker->randomElement(['foto', 'video']),
            'file_path' => $this->faker->url(),
            'url_video' => $this->faker->url(),
        ];
    }
}
