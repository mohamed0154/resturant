<?php

namespace App\Http\Controllers\Carts;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\services\CartServices;

class CartController extends Controller
{
     // Service Container
    private CartServices $cartService;
    public function __construct(CartServices $cartService) {
        $this->cartService = $cartService;
    }
    

    //Cart Items
    public function index(){
       return $this->cartService->index();
    }


    //Add To Cart
    public function store($dish){

      return $this->cartService->addToCart($dish);
    }


    //Decrease CartItems
    public function decrease(Cart $cart){
       return $this->cartService->decrease($cart);
    }
}
