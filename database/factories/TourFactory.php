<?php

namespace Database\Factories;

use App\Models\Travel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::factory()->create()->id;
        return [
            'travel_id' => Travel::factory()->create(['created_by' => $userId])->id,
            'name' => $this->faker->name,
            'starting_date' => $this->faker->date(),
            'ending_date' => $this->faker->date(),
            'price' => $this->faker->numberBetween(50, 9999),
            'created_by' => $userId
        ];
    }
}
