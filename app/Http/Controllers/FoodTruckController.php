<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business\FoodTrucks\FoodTruckBusiness;
use Illuminate\View\View;

class FoodTruckController extends Controller
{
    public function __construct (FoodTruckBusiness $foodTruckBusiness)
    {
        $this->foodTruckBusiness = $foodTruckBusiness;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $food_trucks = $this->foodTruckBusiness->listFoodTrucks($request);

        $permit_statuses = ['APPROVED', 'REQUESTED', 'SUSPEND', 'EXPIRED'];

        return view('food_truck.index', compact('food_trucks'), compact('permit_statuses'));
    }

    /**
     * Display the specified resource.
     */
    public function showFoodTruckDetails($id): View
    {
        $food_truck = $this->foodTruckBusiness->showFoodTruckDetails($id);

        return view('food_truck.show', compact('food_truck'));
    }
}
