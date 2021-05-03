<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use App\Models\accounts;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
                "id" => "plan_JP83Tsv2xpNfyK",
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
                "id" => "plan_JP8ID3XFmuOM0y",
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
                "id" => "price_1ImJncKvk7bbuWcowEzQxVTY",
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
//         $stripe = new \Stripe\StripeClient(
//           'sk_test_51IDzBjKvk7bbuWcozFx0O1f55PPItLvQSL214v0bcVeBpH9zQCaXcBmw0UdCkSOdgV7Rzo1ASDO1Dm8R6zJig7J000bejoZDxi'
//         );
//         $stripe->plans->create([
//           'amount' => 999900,
//           'currency' => 'usd',
//           'interval' => 'month',
//           'product' => 'prod_JP83rFAHNMSfeG',
//         ]);

        return view('home', [
            "plans" => $plans
        ]);
//        $stripe = new \Stripe\StripeClient(
//           'sk_test_51IDzBjKvk7bbuWcozFx0O1f55PPItLvQSL214v0bcVeBpH9zQCaXcBmw0UdCkSOdgV7Rzo1ASDO1Dm8R6zJig7J000bejoZDxi'
//         );
//        $stripe->charges->create([
//            'amount' => 2000,
//            'currency' => 'usd',
//            'source' => 'tok_amex',
//            'description' => 'My First Test Charge (created for API docs)',
//        ]);
    }

    public function test(){

        $field= accounts::getTextFieldInstance();

          $field->name= "test19";
          $field->label= "test19";
          $field->type= "select";
            "required|min:6"
          ;

          $field->extra= [
              "group"=> "mohamed",
              "options"=>[
                [
                  "value"=>1,
                  "label"=>"male"
                ],
                [
                  "value"=>2,
                  "label"=>"female"
                ],
              ]
          ];
          $field->save();
        // $field= accounts::getTextFieldInstance();
        // $field->name= "field2";
        // $field->label= "test";
        // $field->extra= [
        //     "group"=> "tracking"
        // ];
        // $field->save();

// $accounts= accounts::findOrFail(2);
// $accounts->fields= [
//      "field2"=> "123"
//  ];
      return accounts::fields()->get();
    }
}
