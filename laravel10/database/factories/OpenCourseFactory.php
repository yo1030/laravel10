<?php

namespace Database\Factories;

use App\Models\CourseMaster;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OpenCourse>
 */
class OpenCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'month' => fake()->date('Ym'),
            'course_id' => fake()->numberBetween(1,4)
        ];
    }
}
