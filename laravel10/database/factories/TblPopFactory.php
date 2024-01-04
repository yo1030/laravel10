<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TblPop>
 */
class TblPopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pref_name' => fake()->randomElement(['Tokyo', 'Osaka', 'Hokkaido', 'Aomori', 'Chiba', 'Akita']), // Add more prefectures as needed
            'age_class' => fake()->numberBetween(1, 3),
            'sex_cd' => fake()->randomElement(['m', 'f']),
            'population' => fake()->numberBetween(100, 1000),
        ];
    }
}
