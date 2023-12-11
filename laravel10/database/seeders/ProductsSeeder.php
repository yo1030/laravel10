<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productList = [
            'Apple',
            'Orange',
            'Banana',
            'Grape',
            'WaterMelon',
            'Lemon',
            'Strawberry'
        ];
        Products::factory(7)
            ->sequence(
                fn (Sequence $sequence) => 
                [
                    'name' => $productList[$sequence->index]
                ]
            )
            ->create();
    }
}
