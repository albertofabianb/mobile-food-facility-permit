<?php

namespace App\Business\FoodTrucks;

use Illuminate\Http\Request;
use App\Models\FoodTruck;

class FoodTruckBusiness
{
    public function listFoodTrucks(Request $request)
    {
        $food_trucks = FoodTruck::query();

        if ($request->applicant_search) {
            $food_trucks->where('Applicant', 'like', '%' . $request->applicant_search . '%');
        }

        if ($request->location_search) {
            $food_trucks->where('LocationDescription', 'like', '%' . $request->location_search . '%');
        }

        if ($request->address_search) {
            $food_trucks->where('Address', 'like', '%' . $request->address_search . '%');
        }

        if ($request->food_items_search) {
            $food_trucks->where('FoodItems', 'like', '%' . $request->food_items_search . '%');
        }

        if ($request->status_search) {
            $food_trucks->where('Status',  "{$request->status_search}");
        }

        return $food_trucks->paginate(15);
    }

    public function showFoodTruckDetails($id): FoodTruck
    {
        return FoodTruck::find($id);
    }
}
