<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shohin>
 */
class ShohinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $shohin_id = 1;
        return [
            'shohin_id' => str_pad($shohin_id++, 4, '0', STR_PAD_LEFT),
            'shohin_mei' => fake()->unique()->randomElement([
                'Tシャツ', '穴あけパンチ', 'カッターシャツ', '包丁', 
                'フォーク', 'おろし金', 'ボールペン', 'シャープペンシル'
            ]),
            'shohin_bunrui' => fake()->randomElement(['食料品', 'キッチン用品', '文房具']),
            'hanbai_tanka' => fake()->numberBetween(100, 5000)    
        ];
    }
}
