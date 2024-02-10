<?php

namespace Database\Seeders;

use App\Models\SeqTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class SeqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeqTable::truncate();

        $sequences = [1, 2, 4, 5, 6, 7, 8, 11, 12];
        // Adjust the count as needed
        SeqTable::factory(9)
        ->sequence(
            fn(Sequence $seq) => [
                'seq' => $sequences[$seq->index]
            ]
        )
        ->create();
    }
}
