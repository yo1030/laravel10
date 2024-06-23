<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Graduate;

class GraduateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // income の値は画像の内容に基づいています。
        $incomes = [400000, 30000, 20000, 20000, 20000, 20000, 15000, 15000, 10000, 10000, 10000];
        
        foreach ($incomes as $income) {
            // Factory を使用して Graduate モデルのインスタンスを作成します。
            $graduate = Graduate::factory()->create();

            // ここで income フィールドを上書きします。
            $graduate->income = $income;
            $graduate->save(); // 変更を保存します。
        }
    }
}
