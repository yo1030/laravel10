<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoadSamples>
 */
class LoadSamplesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sample_date'=>fake()->dateTimeBetween('-3 month', '3 month'),
            'load_val'=>fake()->numberBetween(700, 2500)
        ];
    }
}
