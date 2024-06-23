<?php

namespace Database\Seeders;

use App\Models\Pref;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class PrefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prefList = [
            'Tokushima',
            'Kagawa',
            'Ehime',
            'Kouchi',
            'Hukuoka',
            'Saga',
            'Nagasaki',
            'Tokyo',
            'Gunma',
            'Iwate',
        ];
        Pref::factory(20)
            ->sequence(
                fn (Sequence $sequence) => 
                [
                    'pref_name' => $prefList[floor($sequence->index / 2)],
                    'sex' => ($sequence->index % 2)
                ]
            )
            ->create();
    }
}
