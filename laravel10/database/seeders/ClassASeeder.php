<?php

namespace Database\Seeders;

use App\Models\Class_A;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ClassASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Class_A::truncate();

        $nameList = [
            'Tanaka',
            'Suzuki',
            'Izyuuinn'
        ];

        Class_A::factory(3)
        ->sequence(
            fn (Sequence $sequence) => [
                'id' => $sequence->index + 1,
                'name' => $nameList[$sequence->index]
            ],
        )->create();
    }
}
