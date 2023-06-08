<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TravelTest extends TestCase
{
    public function test_travels_end_point(): void
    {
        $this->get(route('travels.index'))->assertOk();
    }
}
