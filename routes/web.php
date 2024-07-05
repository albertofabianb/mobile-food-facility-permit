<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodTruckController;

Route::get('/', function () {
    return redirect()->route('food_truck');
});

Route::get('/food_truck',[FoodTruckController::class, 'index'])->name('food_truck');
Route::get('/food_truck_details/{id}',[FoodTruckController::class, 'showFoodTruckDetails'])->name('food_truck_details');
