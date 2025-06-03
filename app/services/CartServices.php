<?php
namespace App\services;

use App\Models\Cart;
use App\Models\Dish;
use Illuminate\Support\Facades\Auth;

class CartServices
{
    // index
    public function index()
    {
        $cart_items = Cart::with('dish:id,name,image')->where('user_id', Auth::user()->id)->get();
        $total_price = Cart::where('user_id', Auth::user()->id)->sum('total_price');
        return view('cart.index', compact('cart_items', 'total_price'));
    }

    public function addToCart($dish)
    {
        $dish_item = Dish::findOrFail($dish);
        $user_id = Auth::user()?->id;

        // Check User Found and return redirect if needed
        $this->userValidated($user_id);

        $cart_item = Cart::where('user_id', $user_id)->where('dish_id', $dish)->first();

        // Quantity increase and return redirect if needed
        if ($redirect = $this->increase($cart_item, $dish_item)) {
            return $redirect;
        }

        // create Item
        return $this->createItem($user_id, $dish_item);
    }

    // decrease cartItem
    public function decrease($cart)
    {
        if ($cart->quantity == 1) {
            $cart->delete();
            return redirect()->back();
        }

        $cart->update([
            'quantity' => $cart->quantity - 1,
            'total_price' => $cart->total_price - $cart->dish->price,
        ]);
        return redirect()->back();
    }

    // Increase
    public function increaseQuantity($cart)
    {
        $cart = Cart::with('dish:id,quantity,price')->find($cart);

        if ($cart->quantity == $cart->dish->quantity) {
            return redirect()->back()->with('failed', 'You get The Maximum');
        }

        $cart->update([
            'quantity' => $cart->quantity + 1,
            'total_price' => $cart->total_price + $cart->dish->price,
        ]);
        return redirect()->back();
    }

    // Destroy Item
    public function destroy($cart)
    {
        $cart->delete();
        return redirect()->back();
    }

    // check user
    public function userValidated($user_id)
    {
        if (!$user_id) {
            throw new \RuntimeException('Authentication required');
        }
    }

    // icrease quantity
    public function increase($cart_item, $dish_item)
    {
        if ($cart_item) {
            // check quantity
            if ($cart_item->quantity >= $dish_item->quantity) {
                return redirect()->back()->with('failed', 'you get the Maximum for this item');
            }

            $cart_item->increment('quantity');
            $cart_item->total_price += $dish_item->price;
            $cart_item->save();
            return redirect()->back()->with('success', "you add $cart_item->quantity from this dish");
        }

        return;
    }

    // create item
    public function createItem($user_id, $dish_item)
    {
        Cart::create([
            'user_id' => $user_id,
            'dish_id' => $dish_item->id,
            'quantity' => 1,
            'total_price' => $dish_item->price,
        ]);

        return redirect()->back()->with('success', 'Dish added to your Cart');
    }
}
