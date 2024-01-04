<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TblAge>
 */
class TblAgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'age_class' => fake()->unique()->numberBetween(1, 3),
            'age_range' => fake()->randomElement(['21~30', '31~40', '41~50']),
        ];
    }
}
