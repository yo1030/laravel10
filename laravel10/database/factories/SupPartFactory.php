<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SupPart>
 */
class SupPartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sup' => fake()->randomElement(['A', 'B', 'C', 'D', 'E', 'F']),
            'part' => fake()->randomElement(['ボルト', 'ナット', 'パイプ', 'ヒューズ'])
        ];
    }
}
