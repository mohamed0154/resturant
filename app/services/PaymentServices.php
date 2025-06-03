<?php

namespace App\services;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient;

class PaymentServices
{
    public $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(
            config('stripe.api_key.secret')
        );
    }

    // Payment
    public function payment()
    {
        $cart_items = Cart::with('dish:id,name,image,price')->where('user_id', Auth::user()->id)->get();
        // Check Chart Items
        if (empty($cart_items->toArray()))
            return redirect()->back();

        // Make LineItems
        $line_items = $this->createLineItems($cart_items);

        // Create Session
        return $this->createSession($line_items);
    }

    // Make LineItems
    public function createLineItems($cart_items)
    {
        $line_items = $cart_items->map(function ($item) {
            return [
                'price_data' => [
                    'currency' => 'usd',  // or your preferred currency
                    'product_data' => [
                        'name' => $item->dish->name,
                    ],
                    'unit_amount' => $item->dish->price * 100,  // Stripe expects amount in cents
                ],
                'quantity' => $item->quantity,
            ];
        })->toArray();

        return $line_items;
    }

    // Create Session
    public function createSession($line_items)
    {
        $session = $this->stripe->checkout->sessions->create([
            'line_items' => $line_items,
            'mode' => 'payment',
            'success_url' => route('users.orders.store') . '?session_id={CHECKOUT_SESSION_ID}',
        ]);
        // Store session ID temporarily if needed
        session(['stripe_checkout_session_id' => $session->id]);
        return redirect($session->url);
    }
}
