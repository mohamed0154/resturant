<?php

namespace App\services;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient;

class OrderServices
{
    // Index
    public function indexService()
    {
        $orders = Order::withCount('order_items')->with('user:id,full_name')->get();
        return view('orders.index', compact('orders'));
    }

    // userOrdersService
    public function userOrdersService()
    {
        $orders = Order::withCount('order_items')->with('user:id,full_name')->where('user_id', Auth::id())->get();
        return view('orders.index', compact('orders'));
    }

    // Store Order
    public function storeService($request)
    {
        $sessionId = $request->query('session_id');

        if (!$sessionId) {
            return redirect()->route('users.carts.index')->with('error', 'Invalid payment session');
        }

        // Create Session
        $session = $this->createSession($sessionId);

        // Check if payment was successful
        if ($session->payment_status !== 'paid') {
            return redirect()->route('users.carts.index')->with('error', 'Payment not completed');
        }

        // Create Order
        $order = $this->createOrder($sessionId, $session);

        // Create Order Items
        $this->CreateOrderItems($order);

        // Delete Cart Items
        return $this->deleteCartItems();
    }

    // Show Order
    public function showService($order)
    {
        $order_items = OrderItem::with('dish:id,name,quantity')->where('order_id', $order)->get();
        $order = Order::with('user:id,full_name')->find($order);
        return view('orders.order_details', compact('order', 'order_items'));
    }

    // delete Order
    public function deleteService($order)
    {
        $order = Order::findOrFail($order);
        $order->delete();
        return to_route('admin.orders.index');
    }

    // create Session
    public function createSession($sessionId)
    {
        $stripe = new StripeClient(config('stripe.api_key.secret'));
        $session = $stripe->checkout->sessions->retrieve($sessionId);
        return $session;
    }

    // Create Order
    public function createOrder($sessionId, $session)
    {
        $order = Order::create([
            'user_id' => Auth::id(),
            'stripe_session_id' => $sessionId,
            'total_price' => $session->amount_total / 100,
            'status' => 'pending',
            'payment' => true,
            'date' => date('Y-m-d')
        ]);

        return $order;
    }

    // Create Order Items
    public function CreateOrderItems($order)
    {
        // Process the order
        $cartItems = Cart::with('dish')->where('user_id', Auth::id())->get();

        // Create Items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'dish_id' => $item->dish_id,
                'quantity' => $item->quantity,
                'price' => $item->total_price,
            ]);
        }
    }

    // Delete Cart Items
    public function deleteCartItems()
    {
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('users.carts.index')->with('success', 'Payment is completed');
    }
}
