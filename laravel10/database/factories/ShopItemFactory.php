<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopItem>
 */
class ShopItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop' => fake()->randomElement(['Sendai', 'Tokyo', 'Osaka']),
            'item' => fake()->randomElement(['Beer', 'Paper Diaper', 'Bicycle', 'Curtain', 'TV'])
        ];
    }
}
