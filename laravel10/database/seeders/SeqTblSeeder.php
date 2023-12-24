<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeqTbl;

class SeqTblSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 既存のデータをクリア
        SeqTbl::truncate();

        // ダミーデータの挿入
        $data = [
            ['seq' => 1, 'name' => 'デイヴ'],
            ['seq' => 2, 'name' => 'アン'],
            ['seq' => 3, 'name' => 'ライアン'],
            ['seq' => 5, 'name' => 'カイ'],
            ['seq' => 6, 'name' => 'マリー'],
            ['seq' => 8, 'name' => 'ベン']
        ];

        foreach ($data as $datum) {
            SeqTbl::create($datum);
        }
    }
}
