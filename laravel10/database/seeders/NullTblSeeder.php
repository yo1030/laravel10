<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NullTbl;

class NullTblSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NullTbl::factory()->count(3)->create();
    }
}
