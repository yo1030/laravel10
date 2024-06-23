<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaleHistory>
 */
class SaleHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sale_date' => fake()->date(),
            'item_no' => fake()->randomElement([10, 20, 30, 40]),
            'quantity' => fake()->numberBetween(5, 60),
        ];
    }
}
