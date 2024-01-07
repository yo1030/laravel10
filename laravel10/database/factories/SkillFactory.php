<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $skills = ['Oracle', 'UNIX', 'Java'];
        // static $skills = ['Oracle', 'UNIX', 'Java', 'C#', 'PHP', 'Perl', 'C++'];

        return [
            'skill' => fake()->unique()->randomElement($skills),
        ];
    }
}
