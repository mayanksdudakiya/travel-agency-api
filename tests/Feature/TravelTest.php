<?php

namespace Tests\Feature;

use App\Models\Travel;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TravelTest extends TestCase
{
    use RefreshDatabase;

    public User $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    public function test_travels_end_point(): void
    {
        $this->get(route('travels.index'))->assertOk();
    }

    public function test_travels_can_be_created(): void
    {
        $newTravel = [
            'name'           => 'Travel to India',
            'description'    => 'India is 5th largest economy in the world',
            'number_of_days' => 5,
            'is_public'      => true,
            'created_by'     => $this->user->id
        ];

        $this->post(route('travels.store'), $newTravel)
            ->assertSuccessful(201);

        $this->assertDatabaseHas('travels', $newTravel);
    }

    public function test_travels_can_be_listed_with_paginated_data(): void
    {
        Travel::factory(16)->create(['is_public' => true]);

        $this->get(route('travels.index'))
            ->assertOk()
            ->assertJsonCount(15, 'data')
            ->assertJsonPath('meta.last_page', 2);
    }

    public function test_only_public_travels_can_be_listed(): void
    {
        $publicTravel = Travel::factory()->create(['is_public' => true, 'created_by' => $this->user->id]);
        Travel::factory()->create(['is_public' => false, 'created_by' => $this->user->id]);

        $this->get(route('travels.index'))
            ->assertOk()
            ->assertJsonCount(1, 'data')
            ->assertJsonPath('data.0.name', $publicTravel->name);
    }
}
