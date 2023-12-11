<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ArrayTbl2;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArrayTbl2>
 */
class ArrayTbl2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (ArrayTbl2 $array_tbl2) {
            // 'key' の値に基づいて 'val' を設定
            // if ($array_tbl2->key === 'A') {
            //     $array_tbl2->val = null;
            // } elseif ($array_tbl2->key === 'B' && $array_tbl2->i === 1) {
            if ($array_tbl2->key === 'B' && $array_tbl2->i === 1) {
                $array_tbl2->val = 3;
            } elseif ($array_tbl2->key === 'C') {
                $array_tbl2->val = 1;
            } elseif ($array_tbl2->key === 'D' && $array_tbl2->i === 2) {
                $array_tbl2->val = 9;
            } elseif ($array_tbl2->key === 'E') {
                if ($array_tbl2->i === 2) {
                    $array_tbl2->val = 3;
                } elseif ($array_tbl2->i === 3) {
                    $array_tbl2->val = 1;
                } elseif ($array_tbl2->i === 4 || $array_tbl2->i === 7) {
                    $array_tbl2->val = 9;
                } else {
                    $array_tbl2->val = null;
                }
            } else {
                $array_tbl2->val = null;
            }
        });
    }
}
