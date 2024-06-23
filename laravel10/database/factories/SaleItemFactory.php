<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaleItem>
 */
class SaleItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_no' => fake()->numberBetween(10,40),
            'item' => fake()->unique()->randomElement([
                'SDカード', 'CD-R', 'USBメモリ', 'DVD']),
        ];
    }
}
