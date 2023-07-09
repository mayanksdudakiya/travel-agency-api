<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourStoreRequest;
use App\Http\Resources\TourResource;
use App\Models\Travel;

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
