<?php

namespace Database\Seeders;

use App\Models\EmpSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class EmpSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empList = [
            '稲葉',
            '稲葉',
            '稲葉',
            '稲葉',
            '神崎',
            '神崎',
            '神崎',
            '平井',
            '平井',
            '平井',
            '平井',
            '平井',
            '若松',
            '澤村'
        ];
        $skillList = [
            'Oracle',
            'UNIX',
            'Java',
            'C#',
            'Oracle',
            'UNIX',
            'Java',
            'UNIX',
            'Oracle',
            'PHP',
            'Perl',
            'C++',
            'Perl',
            'Oracle'
        ];

        EmpSkill::factory(14)
        ->sequence(
            fn (Sequence $sequence) => 
            [
                'emp' => $empList[$sequence->index],
                'skill' => $skillList[$sequence->index],
            ]
        )
        ->create();
    }
}
