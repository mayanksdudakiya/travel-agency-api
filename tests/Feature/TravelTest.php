<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TravelTest extends TestCase
{
    public function test_travels_end_point(): void
    {
        $this->get(route('travels.index'))->assertOk();
    }

    public function test_travels_can_be_created(): void
    {
        $user = User::factory()->create();

        $newTravel = [
            'name'           => 'Travel to India',
            'description'    => 'India is 5th largest economy in the world',
            'number_of_days' => 5,
            'is_public'      => true,
            'created_by'     => $user->id
        ];

        $this->post(route('travels.store'), $newTravel)
            ->assertSuccessful(201);

        $this->assertDatabaseHas('travels', $newTravel);
    }
}
