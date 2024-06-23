<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seat2>
 */
class Seat2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'line_id' => fake()->randomElement(['A', 'B', 'C', 'D']),
            // 'seat' => fake()->unique()->numberBetween(1, 15),
            'seat' => fake()->numberBetween(1, 15),
            'status' => fake()->randomElement(['空', '占'])
        ];
    }
}
