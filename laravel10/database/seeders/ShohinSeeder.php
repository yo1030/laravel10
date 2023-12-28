<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shohin;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ShohinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shohinData = [
            ['shohin_mei' => 'Tシャツ', 'shohin_bunrui' => '衣類'],
            ['shohin_mei' => '穴あけパンチ', 'shohin_bunrui' => '事務用品'],
            ['shohin_mei' => 'カッターシャツ', 'shohin_bunrui' => '衣類'],
            ['shohin_mei' => '包丁', 'shohin_bunrui' => 'キッチン用品'],
            ['shohin_mei' => 'フォーク', 'shohin_bunrui' => 'キッチン用品'],
            ['shohin_mei' => 'おろし金', 'shohin_bunrui' => 'キッチン用品'],
            ['shohin_mei' => 'ボールペン', 'shohin_bunrui' => '事務用品'],
            ['shohin_mei' => 'シャープペンシル', 'shohin_bunrui' => '事務用品']
        ];

        Shohin::factory(8)
        ->sequence(
            fn (Sequence $sequence) => [
                'shohin_mei' => $shohinData[$sequence->index]['shohin_mei'],
                'shohin_bunrui' => $shohinData[$sequence->index]['shohin_bunrui']
            ]
        )->create();
    }
}
