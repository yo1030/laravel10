<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Greatest>
 */
class GreatestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'x' => fake()->numberBetween(1,10),
            'y' => fake()->numberBetween(1,10),
            'z' => fake()->numberBetween(1,10)
        ];
    }
}
