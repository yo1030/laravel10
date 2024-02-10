<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TblAge;
use Illuminate\Database\Eloquent\Factories\Sequence;

class TblAgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TblAge::factory(3)
        ->sequence(
            fn (Sequence $sequence) => 
            [
                'age_class' => $sequence->index + 1
            ]
        )->create();
    }
}
