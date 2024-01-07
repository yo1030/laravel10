<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TblA1>
 */
class TblA1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'key' => fake()->unique()->randomElement(['A', 'B', 'C']),
            'col_1' => fake()->numberBetween(0, 10),
            'col_2' => fake()->numberBetween(0, 10),
            'col_3' => fake()->numberBetween(0, 10),
        ];
    }
}
