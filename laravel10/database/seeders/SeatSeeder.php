<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    const statusList = [
        '占',
        '占',
        '空',
        '空',
        '空',
        '占',
        '空',
        '空',
        '空',
        '空',
        '空',
        '占',
        '占',
        '空',
        '空',
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seat::truncate();

        Seat::factory(15)
        ->sequence(
            fn(Sequence $seq) => [
                'seat' => $seq->index + 1,
                'status' => self::statusList[$seq->index]
            ]
        )->create();
    }
}
