<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApartmentResource;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApartmentController extends Controller
{
    public function index(Request $request): JsonResource
    {
        $input = $request->only(['name', 'bedrooms', 'bathrooms', 'storeys', 'garages', 'price_min', 'price_max']);
        $data = Apartment::filter($input)->get();
        return ApartmentResource::collection($data);
    }
}
