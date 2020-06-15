<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Plan;
class PayPalController extends Controller
{
    /**

     * Responds with a welcome message with instructions

     *

     * @return \Illuminate\Http\Response

     */

    public function payment(Request $request)

    {

        $data = [];

        $data['items'] = [

            [

                'name' => $request->name,

                'price' => $request->amont,

                'desc'  => 'Donation',

                'qty' => 1

            ]

        ];


  

        $data['invoice_id'] = 1;

        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";

        $data['return_url'] = route('payment.success');

        $data['cancel_url'] = route('payment.cancel');

        $data['total'] = $request->amont;

  

        $provider = new ExpressCheckout;

  

        $response = $provider->setExpressCheckout($data);

  

        $response = $provider->setExpressCheckout($data, true);

  
        $don = new Plan();
        $don->name = $request->name;
        $don->email = $request->email;
        $don->amount = $request->amont;
        $don->save();
        return redirect($response['paypal_link']);

    }

   

    /**

     * Responds with a welcome message with instructions

     *

     * @return \Illuminate\Http\Response

     */

    public function cancel()

    {

        dd('Your payment is canceled. You can create cancel page here.');

    }

  

    /**

     * Responds with a welcome message with instructions

     *

     * @return \Illuminate\Http\Response

     */

    public function success(Request $request)

    {
        $provider = new ExpressCheckout;

        $response = $provider->getExpressCheckoutDetails($request->token);

  

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            session()->flash("success", "payment have been made successfully");
            return redirect()->back();

        }

  

        session()->flash("error", "there was an error proccessing you payment");

    }
}
