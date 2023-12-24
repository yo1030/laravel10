<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeqTbl4;

class SeqTbl4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeqTbl4::factory()->count(5)->create();
    }
}
