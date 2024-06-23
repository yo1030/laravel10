<?php

namespace Database\Seeders;

use App\Models\ClassB2s;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ClassB2sSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cityList = [
            'Tokyo',
            'Chiba',
            'Kanagawa'
        ];
        ClassB2s::factory(6)
            ->sequence(
                fn (Sequence $sequence) => 
                [
                    'city' => $cityList[floor($sequence->index % 3)]
                ]
            )->create();
    }
}
