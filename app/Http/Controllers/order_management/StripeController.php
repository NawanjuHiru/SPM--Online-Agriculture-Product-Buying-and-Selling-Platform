<?php

namespace App\Http\Controllers\order_management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;
Use Session;



class StripeController extends Controller
{
    public function stripe()
    {
        return view('order_management.stripe');
    }


    public function stripePost(Request $request): \Illuminate\Http\RedirectResponse
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "This payment is tested purpose"
        ]);

        Session::flash('success', 'Payment successful!');

        return back();

    }
}
