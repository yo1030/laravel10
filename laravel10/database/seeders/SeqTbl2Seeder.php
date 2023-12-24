<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeqTbl2;

class SeqTbl2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeqTbl2::factory()->count(5)->create();
    }
}
