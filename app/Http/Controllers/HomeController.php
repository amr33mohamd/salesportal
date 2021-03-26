<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \Stripe\Exception\ApiErrorException
     */
    public function index()
    {
        $plans = collect([
            (object)[
                "id" => "price_1IMEwCDdMtluCwdwDsZLxhvN",
                "name" => "Basic Plan",
                "price" => "20",
                "description" => "Basic Plan for accessing the application",
                "features" => [
                    "Includes 150 Tasks/Month",
                    "Unlimited Agents",
                    "Additional Tasks at US$0.14/Task"
                ]
            ],
            (object)[
                "id" => "price_1IMEwCDdMtluCwdwDsZLxhvN",
                "name" => "Premium Plan",
                "price" => "50",
                "description" => "Premium Plan for accessing the application",
                "features" => [
                    "Includes 500 Tasks/Month",
                    "Unlimited Agents",
                    "Additional Tasks at US$0.14/Task"
                ]
            ],
            (object)[
                "id" => "price_1IMEwCDdMtluCwdwDsZLxhvN",
                "name" => "Unlimited Plan",
                "price" => "200",
                "description" => "Unlimited Plan for accessing the application",
                "features" => [
                    "Includes Unlimited Tasks/Month",
                    "Unlimited Agents",
                    "Additional Tasks at US$0.14/Task",
                ]
            ],
        ]);

        //add plan
        // $stripe = new \Stripe\StripeClient(
        //   'sk_test_51IMEWIDdMtluCwdwcZCMTSgNjkwyRYFtm6op6maXihd3ki6ybx9Ec8Lz7Z7mK5Lz6w1K1zP1F3ImEpN88Z0emlOj003bFxPDUy'
        // );
        // $stripe->plans->create([
        //   'amount' => 999900,
        //   'currency' => 'usd',
        //   'interval' => 'month',
        //   'product' => 'prod_IyBIw3ZJCGzdrz',
        // ]);

        return view('home', [
            "plans" => $plans
        ]);
    }
}
