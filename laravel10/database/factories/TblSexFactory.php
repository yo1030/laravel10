<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TblSex>
 */
class TblSexFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sex_cd' => fake()->unique()->randomElement(['m', 'f']),
            'sex' => fake()->unique()->randomElement(['男', '女']),
        ];
    }
}
