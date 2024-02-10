<?php

namespace Database\Seeders;

use App\Models\MyStock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class MyStockSeeder extends Seeder
{
    const dateList = [
        '2018-01-06',
        '2018-01-08',
        '2018-01-09',
        '2018-01-12',
        '2018-01-13',
        '2018-01-14',
        '2018-01-16',
        '2018-01-17',
        '2018-01-18',
    ];
    const priceList = [
        1000,
        1050,
        1050,
        900,
        880,
        870,
        920,
        1000,
        2000,
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyStock::truncate();

        MyStock::factory(9)
        ->sequence(
            fn(Sequence $seq) => [
                'deal_date' => self::dateList[$seq->index],
                'price' => self::priceList[$seq->index],
            ]
        )->create();
    }
}
