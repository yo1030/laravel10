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
            MeetingSeeder::class,
            ProjectSeeder::class,
            TestScoreSeeder::class,
            ArrayTblSeeder::class,
            ArrayTbl2Seeder::class,
            SeqTblSeeder::class,
            GraduateSeeder::class,
            StudentSeeder::class,
            TestResultSeeder::class,
            TeamSeeder::class,
            MaterialSeeder::class,
            ItemSeeder::class,
            ShopSeeder::class,
            ShopItemSeeder::class,
            SeqTbl1Seeder::class,
            SeqTbl2Seeder::class,
            SeqTbl3Seeder::class,
            SeqTbl4Seeder::class,
            SaleSeeder::class,
            Sale2Seeder::class,
            ShohinSeeder::class,
            ReservationSeeder::class,
            AccountSeeder::class,
            CourseSeeder::class,
            PersonnelSeeder::class,
            TblAgeSeeder::class,
            TblSexSeeder::class,
            TblPopSeeder::class,
            SupPartSeeder::class,
            MasterSeeder::class,
            SaleItemSeeder::class,
            SaleHistorySeeder::class,
            ClassASeeder::class,
            ClassBSeeder::class,
            TblASeeder::class,
            TblBSeeder::class,
            TblA1Seeder::class,
            TblB1Seeder::class,
            SkillSeeder::class,
            EmpSkillSeeder::class,
            DigitSeeder::class,
            SeqTableSeeder::class,
            SeatSeeder::class,
            Seat2Seeder::class,
            MyStockSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
