<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ville' => fake()->city(),
            'prix' => mt_rand(800000, 10000000),
            'type' => mt_rand(0, 1) == 0 ? 'Maison' : 'Appartement',
            'description' => fake()->sentence(150),
            'image' => null
        ];
    }
}
