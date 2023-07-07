<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
class PayController extends Controller
{
    public function stripePay(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $total = $request->get('total');
        $total =$total * 100;

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => 'Disfrazado'
                        ],
                        'unit_amount' => $total,
                        
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('error')
        ]);

        return redirect()->away($session->url);
    }

    public function success() {
        if (!Auth::check()) {
           return redirect('/tienda'); 
        }

        \Cart::clear();
        return view('success');
    }
    public function error() {
        return back();
    }
}