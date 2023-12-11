<?php

namespace Database\Seeders;

use App\Models\ClassBs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ClassBsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ageList = [
            18,
            19,
            20,
            21,
            null,
            23
        ];
        $cityList = [
            'Tokyo',
            'Chiba',
            'Kanagawa'
        ];
        ClassBs::factory(6)
            ->sequence(
                fn (Sequence $sequence) => 
                [
                    'age' => $ageList[$sequence->index],
                    'city' => $cityList[floor($sequence->index % 3)]
                ]
            )
            ->create();
    }
}
