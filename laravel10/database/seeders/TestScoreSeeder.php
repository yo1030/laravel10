<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TestScore;

class TestScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student_ids = [100, 100, 100, 200, 200, 300, 300, 300, 400];
        $subjects = ['算数', '国語', '理科', '算数', '国語', '算数', '国語', '社会', '算数'];
        $scores = [100, 80, 80, 80, 95, 40, 90, 55, 80];

        for ($i = 0; $i < count($student_ids); $i++) {
            TestScore::create([
                'student_id' => $student_ids[$i],
                'subject' => $subjects[$i],
                'score' => $scores[$i],
            ]);
        }
    }
}
