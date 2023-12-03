<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session('cart', []);
        $totalPrice = 0;

        foreach ($cartItems as $item) {
            $totalPrice += $item['price'] * $item['qty'];
        }
        return view('frontend.pages.cart', compact('cartItems', 'totalPrice'));
    }

    public function add(Request $request)
    {
        $productId = $request->product_id;
        $size = $request->size;
        $qty = $request->qty;

        $product = Product::find($productId); //Product id ile dbden ürün yakaladık

        if (!$product) {
            return back()->withErrors("The product couldn't find");
        } else {
            $cartItems = session('cart', []);

            if (array_key_exists($productId, $cartItems)) {
                $cartItems[$productId]['qty'] += $qty;
            } else {
                $cartItems[$productId] = [
                    'image' => $product->image,
                    'name' => $product->name,
                    'price' => $product->price,
                    'qty' => $qty,
                    'size' => $size
                ];
            }
            session(['cart' => $cartItems]);
            return back()->withSuccess("The product added to the Cart!");
        }

        return request()->all();
    }

    public function remove()
    {
    }
}
