<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all()->map(function ($restaurant) {
            $restaurantArray = $restaurant->toArray();
            // $userArray['rating'] = $restaurant->rating();
            $restaurantArray['is_open'] = $restaurant->isPen();
            $restaurantArray['has_delivery'] = $restaurant->hasDelivery();
            return $restaurantArray;
        });
    
        return response()->json($restaurants);

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
