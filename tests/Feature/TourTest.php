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
}
