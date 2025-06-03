<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index');
    }

    public function store(Request $request)
    {
        $sessionId = $request->query('session_id');

        if (!$sessionId) {
            return redirect()->route('users.carts.index')->with('error', 'Invalid payment session');
        }

        $stripe = new StripeClient(config('stripe.api_key.secret'));
        $session = $stripe->checkout->sessions->retrieve($sessionId);

        // Check if payment was successful
        if ($session->payment_status !== 'paid') {
            return redirect()->route('users.carts.index')->with('error', 'Payment not completed');
        }

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('users.carts.index')->with('success', 'Payment is completed');
    }
}
