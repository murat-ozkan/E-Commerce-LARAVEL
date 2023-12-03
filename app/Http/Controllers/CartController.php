<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItem = session('cart', []);
        $totalPrice = 0;

        foreach ($cartItem as $item) {
            $totalPrice += $item['price'] * $item['qty'];
        }
        return view('frontend.pages.cart', compact('cartItem', 'totalPrice'));
    }

    public function add(Request $request)
    {
        return request()->all();
    }
    
    public function remove()
    {
    }
}
