<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\TravelStoreRequest;
use App\Http\Resources\TravelResource;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $publicTravels = Travel::whereIsPublic(true)->paginate();
        return TravelResource::collection($publicTravels);
    }

    public function store(TravelStoreRequest $request): TravelResource
    {
        $newTravel = Travel::create($request->validated());
        return new TravelResource($newTravel);
    }
}
