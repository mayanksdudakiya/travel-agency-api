<?php

namespace Tests\Feature;

use App\Models\Travel;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TourTest extends TestCase
{
    use RefreshDatabase;

    public function test_tour_end_point(): void
    {
        $travel = Travel::factory()->create([
            'created_by' => User::factory()->create()->id
        ]);

        $this->get(route('tours.index', $travel->slug))
            ->assertOk();
    }

    public function test_tour_can_be_created(): void
    {
        $travel = Travel::factory()->create();

        $newTour = [
            'name' => 'Tour Name',
            'starting_date' => now()->toDateString(),
            'ending_date' => now()->addDay()->toDateString(),
            'price' => 77.78,
        ];

        $this->post(route('tours.store', $travel->id), $newTour)
            ->assertSuccessful(201);

        $this->assertDatabaseHas('tours', $newTour);
    }
}
