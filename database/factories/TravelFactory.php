<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph(2),
            'number_of_days' => $this->faker->numberBetween(1, 10),
            'is_public' => $this->faker->boolean(50),
            'created_by' => $this->faker->randomElement(User::pluck('id')),
        ];
    }
}
