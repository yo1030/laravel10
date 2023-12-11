<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Meeting;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Salary;
use App\Models\OpenCourse;
use Database\Seeders\CourseMasterSeeder;
use Database\Seeders\PrefSeeder;
use Database\Seeders\ProductsSeeder;
use Database\Seeders\MeetingSeeder;

class DatabaseSeeder extends Seeder
{
    // テーブルに追加する行を指定する or ファクトリーで作成するデータ数を指定する
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();
        Salary::factory(100)->create();
        OpenCourse::factory(20)->create();
        $this->call([
            CourseMasterSeeder::class,
            PrefSeeder::class,
            ProductsSeeder::class,
            MeetingSeeder::class
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
