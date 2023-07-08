<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        return [];
    }

    public function store(Travel $travel, TourStoreRequest $request): TourResource
    {
        $newTour = $travel->tours($request->validated());
        return new TourResource($newTour);
    }
}
