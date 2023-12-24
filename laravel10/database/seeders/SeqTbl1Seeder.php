<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeqTbl1;

class SeqTbl1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeqTbl1::factory()->count(5)->create();
    }
}
