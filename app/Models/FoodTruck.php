<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodTruck extends Model
{
    use HasFactory;

    protected $table = "mobile_food_facility_permit";
    protected $primaryKey = 'locationid';
}
