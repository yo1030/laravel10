<?php

namespace Database\Seeders;

use App\Models\ClassA2s;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassA2sSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassA2s::factory(3)->create();
    }
}
