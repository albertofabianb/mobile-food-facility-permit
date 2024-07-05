<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;
use App\Models\FoodTruck;
use App\Business\FoodTrucks\FoodTruckBusiness;
use Illuminate\Http\Request;

class FoodTruckBusinessTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function it_can_list_food_trucks_with_pagination()
    {
        // Create a few FoodTruck registers
        FoodTruck::factory()->count(20)->create();

        $foodTruckBusiness = new FoodTruckBusiness();
        $request = Request::create('/food-trucks', 'GET');

        $result = $foodTruckBusiness->listFoodTrucks($request);

        $this->assertEquals(15, $result->count());
        $this->assertInstanceOf(\Illuminate\Pagination\LengthAwarePaginator::class, $result);
    }

    /** @test */
    public function it_can_search_food_trucks_by_food_items()
    {
        // Crear registros de FoodTruck
        FoodTruck::factory()->create(['FoodItems' => 'Tacos, Burritos']);
        FoodTruck::factory()->create(['FoodItems' => 'Burgers, Fries']);
        FoodTruck::factory()->create(['FoodItems' => 'Pizza, Pasta']);

        $foodTruckBusiness = new FoodTruckBusiness();

        $request = Request::create('/api/food-trucks', 'GET', ['food_search' => 'Burgers']);

        $result = $foodTruckBusiness->listFoodTrucks($request);

        $this->assertCount(1, $result);
        $this->assertEquals('Burgers, Fries', $result->first()->FoodItems);
    }
}
