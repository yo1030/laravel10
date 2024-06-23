<?php

namespace Database\Seeders;

use App\Models\ClassAs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassAsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassAs::factory(3)->create();
    }
}
