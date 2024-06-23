<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SupPart;
use Illuminate\Database\Eloquent\Factories\Sequence;

class SupPartSeeder extends Seeder
{
    private static $supList = [
        'A',
        'A',
        'A',
        'B',
        'B',
        'C',
        'C',
        'C',
        'D',
        'D',
        'E',
        'E',
        'E',
        'F',
    ];
    private static $partList = [
        'ボルト',
        'ナット',
        'パイプ',
        'ボルト',
        'パイプ',
        'ボルト',
        'ナット',
        'パイプ',
        'ボルト',
        'パイプ',
        'ヒューズ',
        'ナット',
        'パイプ',
        'ヒューズ',
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SupPart::truncate();

        SupPart::factory(14)
        ->sequence(
            fn (Sequence $sequence) => 
            [
                'sup' => self::$supList[$sequence->index],
                'part' => self::$partList[$sequence->index],
            ]
        )
        ->create();
    }
}
