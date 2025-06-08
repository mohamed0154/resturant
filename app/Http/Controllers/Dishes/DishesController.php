<?php

namespace App\Http\Controllers\Dishes;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use App\Models\Dish;
use App\services\DishServices;
use App\Traits\Media;

class DishesController extends Controller
{
    use Media;

    // Service Container
    public function __construct(
        private DishServices $dishService
    ) {}

    // Create Dishes
    public function create()
    {
        return $this->dishService->create();
    }

    // Dishes
    public function index()
    {
        return $this->dishService->index();
    }

    // Store
    public function store(StoreDishRequest $request)
    {
        return $this->dishService->storeDish($request);
    }

    // edit
    public function edit(Dish $dish)
    {
        return $this->dishService->edit($dish);
    }

    // Update
    public function update(UpdateDishRequest $request, Dish $dish)
    {
        // Update dish
        return $this->dishService->updateDish($request, $dish);
    }

    // Destroy
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->back()->with('success', 'Dish Deleted Successfully');
    }
}
