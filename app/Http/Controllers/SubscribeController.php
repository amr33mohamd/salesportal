<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //
    public function subscribe($price_id)
    {
        $user = auth()->user();
        if ($user->hasDefaultPaymentMethod()) {
            //
            if ($user->subscribed('default')) {
                $user->subscription('default')->swapAndInvoice($price_id);
            } else {
                $user->newSubscription('default', $price_id)->create($user->defaultPaymentMethod()->asStripePaymentMethod());
            }
            return back()->with('status', 'You have subscribed successfully.');
        } else {
            return redirect()->route('payment_methods.index')->with('status', 'You need to add a default payment method first.');
        }
    }
}
