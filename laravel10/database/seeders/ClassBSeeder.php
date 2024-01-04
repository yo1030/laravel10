<?php

namespace Database\Seeders;

use App\Models\Class_B;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ClassBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Class_B::truncate();

        $nameList = [
            'Tanaka',
            'Suzuki',
            'Saionzi'
        ];

        Class_B::factory(3)
        ->sequence(
            fn (Sequence $sequence) => [
                'id' => $sequence->index === 2 ? $sequence->index + 2: $sequence->index + 1,
                'name' => $nameList[$sequence->index]
            ],
        )->create();
    }
}
