<?php

namespace App\Http\Controllers\Dishes;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use App\Models\Category;
use App\Models\Dish;
use App\services\DishServices;
use App\Traits\Media;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    use Media;

    // Service Container
    private DishServices $dishService;
    public function __construct(DishServices $dishService) {
        $this->dishService = $dishService;
    }


    //Create Dishes
    public function create(){
        $categories = Category::select('id','name')->get();
        return view('dishes.add_dish',compact('categories'));
    }


    //Store
     public function store(StoreDishRequest $request){
        
        // store Dish
        $this->dishService->storeDish($request);
        return redirect()->back()->with('success','Dish is created Successfully');
    }


    //Dishes
     public function index(){
        $dishes=Dish::with('category:id,name')->select('id','name','category_id','description','image','price','quantity')->paginate(50);

        return view('dishes.index',compact('dishes'));
    }


    //edit
     public function edit(Dish $dish){
        $categories = Category::select('id','name')->get();
        return view('dishes.edit',compact('categories','dish'));
    }



    // Update
     public function update(UpdateDishRequest $request,Dish $dish){
        // Update dish 
        $this->dishService->updateDish($request,$dish);
        return redirect()->back()->with('success','Dish Updated Successfully');
    }

    // Destroy
    public function destroy(Dish $dish){
        $dish->delete();
        return redirect()->back()->with('success','Dish Deleted Successfully');
    }

}
