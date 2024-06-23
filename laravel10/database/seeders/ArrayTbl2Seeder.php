<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ArrayTbl2;

class ArrayTbl2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 各 'key' 値（A, B, C, D, E）についてループ
        foreach (['A', 'B', 'C', 'D', 'E'] as $key) {
            // 'i' の値は1から10まで
            for ($i = 1; $i <= 10; $i++) {
                ArrayTbl2::factory()->create([
                    'key' => $key,
                    'i' => $i,
                    // 'val' は Factory の afterMaking() で設定されます
                ]);
            }
        }
    }
}
