<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ArrayTbl;

class ArrayTblSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keys = ['A', 'B', 'C', 'D', 'E'];
        $col1 = [null, 3, 1, null, null];
        $col2 = [null, null, 1, 9, 3];
        $col3 = [null, null, 1, null, 1];
        $col4 = [null, null, 1, null, 9];
        $col5 = [null, null, 1, null, null];
        $col6 = [null, null, 1, null, null];
        $col7 = [null, null, 1, null, 9];
        $col8 = [null, null, 1, null, null];
        $col9 = [null, null, 1, null, null];
        $col10 = [null, null, 1, null, null];

        for ($i = 0; $i < count($keys); $i++) {
            ArrayTbl::create([
                'key' => $keys[$i],
                'col1' => $col1[$i],
                'col2' => $col2[$i],
                'col3' => $col3[$i],
                'col4' => $col4[$i],
                'col5' => $col5[$i],
                'col6' => $col6[$i],
                'col7' => $col7[$i],
                'col8' => $col8[$i],
                'col9' => $col9[$i],
                'col10' => $col10[$i],
            ]);
        }
    }
}
