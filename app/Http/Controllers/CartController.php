<?php

// app/Http/Controllers/CartController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function view()
    {
        return view('cart');
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        
        $product_id = $request->product_id;
        
        if(isset($cart[$product_id])) {
            $cart[$product_id]['quantity']++;
        } else {
            $cart[$product_id] = [
                "name" => $request->product_name,
                "quantity" => 1,
                "price" => $request->price
            ];
        }
        
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart');
        
        if(isset($cart[$request->product_id])) {
            unset($cart[$request->product_id]);
            session()->put('cart', $cart);
        }
        
        return redirect()->back()->with('success', 'Product removed from cart');
    }
}