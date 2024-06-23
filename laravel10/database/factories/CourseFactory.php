<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                '赤井', '赤木', '青木', '江藤', '江戸', '清水']),
            'course' => fake()->randomElement([
                'SQL入門', 'UNIX基礎', 'Java中級']),
        ];
    }
}
