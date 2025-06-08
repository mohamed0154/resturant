<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Dish;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $dishes_count = Dish::count();
        $categories_count = Category::count();
        $orders = Order::withCount('order_items')->with('user:id,full_name')->latest()->take(10)->get();

        return view('admin.dashboard', compact('dishes_count', 'categories_count', 'orders'));
    }
}
