<?php

namespace App\Http\Controllers\Carts;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\services\CartServices;

class CartController extends Controller
{
    // Dependency Injection
    private CartServices $cartService;

    public function __construct(CartServices $cartService)
    {
        $this->cartService = $cartService;
    }

    // Cart Items
    public function index()
    {
        return $this->cartService->index();
    }

    // Add To Cart
    public function store($dish)
    {
        return $this->cartService->addToCart($dish);
    }

    // Decrease CartItems
    public function decrease(Cart $cart)
    {
        return $this->cartService->decrease($cart);
    }

    // increase CartItems

    public function increase($cart)
    {
        return $this->cartService->increaseQuantity($cart);
    }

    // destroy CartItems

    public function destroy(Cart $cart)
    {
        return $this->cartService->destroy($cart);
    }
}
