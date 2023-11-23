<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseMaster;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CourseMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courseName = [
            'Introduction to Accounting',
            'Financial Knowledge',
            'BookKeeping',
            'Licensed Tax Accountant',
        ];
        CourseMaster::factory(4)
            ->sequence(
                fn (Sequence $sequence) => 
                ['name' => $courseName[$sequence->index]]
            )
            ->create();
    }
}
