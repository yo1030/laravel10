<?php

namespace Database\Seeders;

use App\Models\Seat2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class Seat2Seeder extends Seeder
{
    const lineIdList = [
        'A',
        'A',
        'A',
        'A',
        'A',
        'B',
        'B',
        'B',
        'B',
        'B',
        'C',
        'C',
        'C',
        'C',
        'C',
    ];
    const statusList = [
        '占',
        '占',
        '空',
        '空',
        '空',
        '占',
        '占',
        '空',
        '空',
        '空',
        '空',
        '空',
        '空',
        '占',
        '空',
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seat2::truncate();

        Seat2::factory(15)
        ->sequence(
            fn(Sequence $seq) => [
                'seat' => $seq->index + 1,
                'line_id' => self::lineIdList[$seq->index],
                'status' => self::statusList[$seq->index]
            ]
        )->create();
    }
}
