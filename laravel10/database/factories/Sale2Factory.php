<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale2>
 */
class Sale2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $year = 1990;
        $skipYears = [
            1991, 1995, 1998, 2000, 2005
        ];
        if (in_array($year, $skipYears, true)) {
            $year++;
        }
        return [
            'year' => $year++,
            'sale' => fake()->numberBetween(49, 55)
        ];
    }
}
