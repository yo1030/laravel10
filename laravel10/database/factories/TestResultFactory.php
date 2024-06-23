<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestResult>
 */
class TestResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->unique()->numerify('0##'),
            'class' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'sex' => $this->faker->randomElement(['男', '女']),
            'score' => $this->faker->numberBetween(60, 100),
        ];
    }
}
