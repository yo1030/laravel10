<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SaleItem;
use Illuminate\Database\Eloquent\Factories\Sequence;

class SaleItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SaleItem::factory(4)
        ->sequence(
            fn (Sequence $sequence) => [
                'item_no' => ($sequence->index + 1) * 10
            ],
        )->create();
    }
}
