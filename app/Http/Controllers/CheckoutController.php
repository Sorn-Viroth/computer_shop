<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function show()
    {
        // Verify cart has items
     if (!session()->has('cart') || count(session('cart')) == 0) {
            return redirect()->route('cart.view')->with('error', 'Your cart is empty');
        }

        return view('frontend.checkout');
    }

    public function process(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
            'payment_method' => 'required|in:credit_card,paypal,bank_transfer'
        ]);

        // Process the order (in a real app, you'd save to database)
        $orderDetails = [
            'user_id' => Auth::id() ?? null,
            'items' => session('cart'),
            'total' => array_reduce(session('cart'), function($carry, $item) {
                return $carry + ($item['price'] * $item['quantity']);
            }, 0),
            'shipping_address' => $request->address,
            'payment_method' => $request->payment_method
        ];

        // Clear the cart
        session()->forget('cart');

        // Redirect to success page with order details
        return redirect()->route('checkout.success')->with('order', $orderDetails);
    }

    public function success()
    {
        if (!session()->has('order')) {
            return redirect()->route('home');
        }

        return view('checkout-success', ['order' => session('order')]);
    }
}
