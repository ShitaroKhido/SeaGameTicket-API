<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedules>
 */
class SchedulesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sport_id' => $this->faker->numberBetween(1, 40),
            'first_country' => $this->faker->numberBetween(1, 10),
            'second_country' => $this->faker->numberBetween(1, 10),
            'event_id' => $this->faker->numberBetween(1, 10),
            'playground_id' => 1,
            'start_time' => $this->faker->time('H:i'),
            'end_time' => $this->faker->time('H:i', '10'),
        ];
    }
}
