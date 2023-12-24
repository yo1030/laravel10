<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeqTbl3;

class SeqTbl3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeqTbl3::factory()->count(5)->create();
    }
}
