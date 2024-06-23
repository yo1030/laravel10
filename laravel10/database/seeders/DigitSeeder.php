<?php

namespace Database\Seeders;

use App\Models\Digit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DigitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can call the factory here to create dummy data
        Digit::factory(10)->create();
    }
}
