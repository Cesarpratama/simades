<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laporan>
 */
class LaporanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'kategori_id' => fake()->randomElement([1, 2, 3, 4]),
            'judul' => fake()->text(20),
            'isi' => fake()->text(150),
            'status' => fake()->randomElement([0, 1])
        ];
    }
}
