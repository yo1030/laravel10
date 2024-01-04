<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personnel>
 */
class PersonnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee' => fake()->unique()->randomElement([
                '赤井', '工藤', '松本', '高田']),
            'child_1' => fake()->randomElement(['一郎', '春子', '夏子', null]),
            'child_2' => fake()->randomElement(['夏子', '二郎', null]),
            'child_3' => fake()->randomElement(['三郎', null]),
        ];
    }
}
