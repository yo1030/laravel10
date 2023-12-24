<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'center' => fake()->randomElement(['Tokyo', 'Osaka', 'Nagoya', 'Hukuoka']),
            'receive_date' => fake()->date(),
            'material' => fake()->randomElement(['tin', 'zinc', 'aluminum', 'nickel', 'lead', 'titanium', 'carbon steel', 'magnesium']),
        ];
    }
}
