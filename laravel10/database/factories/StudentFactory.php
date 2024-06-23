<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => fake()->unique()->numberBetween(100, 999),
            'dpt' => fake()->randomElement(['理学部', '文学部', '工学部', '経済学部']),
            'sbmt_date' => fake()->date()
        ];
    }
}
