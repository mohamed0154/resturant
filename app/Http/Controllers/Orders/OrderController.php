<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\services\OrderServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient;

class OrderController extends Controller
{
    public function __construct(
        private OrderServices $orderService
    ) {}

    // All Orders
    public function index()
    {
        return $this->orderService->indexService();
    }

    // Orders for user
    public function user_orders()
    {
        return $this->orderService->userOrdersService();
    }

    // Store Order
    public function store(Request $request)
    {
        return $this->orderService->storeService($request);
    }

    // Show Order
    public function show($order)
    {
        return $this->orderService->showService($order);
    }

    // destroy Order
    public function destroy($order)
    {
        return $this->orderService->deleteService($order);
    }
}
