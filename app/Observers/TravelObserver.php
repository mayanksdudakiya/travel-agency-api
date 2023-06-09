<?php

namespace App\Observers;

use App\Models\Travel;

class TravelObserver
{
    public function creating(Travel $travel): void
    {
        $travelSlug = str($travel->name)->slug();
        $travel->slug = $travelSlug;
    }
}
