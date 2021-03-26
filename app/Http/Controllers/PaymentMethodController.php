<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment_methods = auth()->user()->paymentMethods()->map(function ($paymentMethod) {
            return $paymentMethod->asStripePaymentMethod();
        });
        return view('payment_methods.index', [
            'payment_methods' => $payment_methods,
            'default_method' => auth()->user()->defaultPaymentMethod()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('payment_methods.form', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = auth()->user();
        $paymentMethodID = $request->get('stripeToken');
// return $paymentMethodID;
        if ($user->stripe_id == null) {
            $user->createAsStripeCustomer();
        }

        $user->addPaymentMethod($paymentMethodID);
        $user->updateDefaultPaymentMethod($paymentMethodID);
        $user->updateDefaultPaymentMethodFromStripe();

        return redirect('/payment_methods');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = auth()->user();
        $user->updateDefaultPaymentMethod($id);
        $user->updateDefaultPaymentMethodFromStripe();
        return back()->with('status', 'The default method was updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $paymentMethod = auth()->user()->findPaymentMethod($id)->delete();
        return back()->with('status', 'The method was deleted successfully');
    }
}
