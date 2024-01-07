<?php

namespace Database\Seeders;

use App\Models\TblB1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class TblB1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TblB1::truncate();

        $keyList = ['A', 'B', 'C'];
        $colList = [
            [2, 3, 4],
            [0, 7, 8],
            [5, 1, 6],
        ];

        TblB1::factory(3)
        ->sequence(
            fn (Sequence $sequence) => 
            [
                'key' => $keyList[$sequence->index],
                'col_1' => $colList[$sequence->index][0],
                'col_2' => $colList[$sequence->index][1],
                'col_3' => $colList[$sequence->index][2],
            ]
        )
        ->create();
    }
}
