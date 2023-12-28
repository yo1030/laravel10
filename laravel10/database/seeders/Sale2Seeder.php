<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale2;

class Sale2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sale2::truncate();
        Sale2::factory(20)->create(); // 20件のダミーデータを生成
    }
}
