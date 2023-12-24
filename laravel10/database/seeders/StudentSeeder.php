<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Sequence;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Student::truncate();

        $dataList = [
            '2018-10-10',
            '2018-09-22',
            NULL,
            '2018-09-10',
            '2018-09-22',
            NULL,
            '2018-09-25',
            '2018-10-11',
            '2018-11-25',
            '2018-11-25',
            '2018-11-12',
        ];

        Student::factory(10)
        ->sequence(
            fn (Sequence $sequence) => [
                'sbmt_date' => $dataList[$sequence->index]
            ],
        )->create();
    }
}
