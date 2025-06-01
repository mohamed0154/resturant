<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function dashboard(){
        $dishes_count = Dish::count();
        $categories_count = Category::count();

        return view('admin.dashboard',compact('dishes_count','categories_count'));
    }
}
