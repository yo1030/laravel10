<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Meeting;
use Illuminate\Database\Eloquent\Factories\Sequence;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meetingList = [
            1,
            1,
            1,
            2,
            2,
            3,
            3,
            3
        ];
        $productList = [
            'Ito',
            'Mizushima',
            'Bandou',
            'Ito',
            'Miyata',
            'Bandou',
            'Mizushima',
            'Miyata'
        ];
        Meeting::factory(8)
            ->sequence(
                fn (Sequence $sequence) => 
                [
                    'meeting'=>$meetingList[$sequence->index],
                    'person' => $productList[$sequence->index]
                ]
            )
            ->create();
    }
}
