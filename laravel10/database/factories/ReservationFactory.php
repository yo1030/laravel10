<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dummy_date = fake()->date();
        $start_date = Carbon::parse($dummy_date)
                                        ->addDays(rand(1, 30))
                                        ->format('Y-m-d');
        $end_date = Carbon::parse($start_date)
                                        ->addDays(rand(1, 30))
                                        ->format('Y-m-d');
        return [
            'reserver' => fake()->name(),
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
    }
}
