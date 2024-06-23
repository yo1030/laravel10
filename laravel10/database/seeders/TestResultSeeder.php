<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TestResult;
use Illuminate\Database\Eloquent\Factories\Sequence;

class TestResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestResult::truncate();

        TestResult::factory(15)
        ->sequence(
            fn (Sequence $sequence) => [
                'student_id' => sprintf('%03d', $sequence->index + 1)
            ],
        )->create();
    }
}
