<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TourTest extends TestCase
{
    use RefreshDatabase;

    public function test_tour_end_point(): void
    {
        $this->get(route('tour.index'))
            ->assertOk();
    }
}
