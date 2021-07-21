<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Plan as Plans;

use App\Http\Controllers\Controller;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Agreement;
use PayPal\Api\Payer;
use PayPal\Api\Plan;
use PayPal\Api\PaymentDefinition;
use PayPal\Api\PayerInfo;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use Illuminate\Support\Facades\Input;
use Redirect;
use URL;
use Session;
class PayPalController extends Controller
{
    /**

     * Responds with a welcome message with instructions

     *

     * @return \Illuminate\Http\Response

     */

    public function __construct()
    {
         /** PayPal api context **/
         $paypal_conf = \Config::get('paypal');
         $this->_api_context = new ApiContext(new OAuthTokenCredential(
             $paypal_conf['client_id'],
             $paypal_conf['secret'])
         );
         $this->_api_context->setConfig($paypal_conf['settings']);
    }
    public function payWithpaypal(Request $request)
    {
        $don = new Plans();
        $don->name = $request->name;
        $don->email = $request->email;
        $don->amount = $request->amont;
        $don->save();

      $amountToBePaid =  $request->amont;
      $payer = new Payer();
      $payer->setPaymentMethod('paypal');

      $item_1 = new Item();
      $item_1->setName('Donation') /** item name **/
              ->setCurrency('USD')
              ->setQuantity(1)
              ->setPrice($amountToBePaid); /** unit price **/

      $item_list = new ItemList();
      $item_list->setItems(array($item_1));

      $amount = new Amount();
      $amount->setCurrency('USD')
             ->setTotal($amountToBePaid);
      $redirect_urls = new RedirectUrls();
      /** Specify return URL **/
      $redirect_urls->setReturnUrl(URL::route('status'))
                ->setCancelUrl(URL::route('status'));

      $transaction = new Transaction();
      $transaction->setAmount($amount)
              ->setItemList($item_list)
              ->setDescription('Donation');

      $payment = new Payment();
      $payment->setIntent('Sale')
              ->setPayer($payer)
              ->setRedirectUrls($redirect_urls)
              ->setTransactions(array($transaction));
      try {
           $payment->create($this->_api_context);
      } catch (\PayPal\Exception\PPConnectionException $ex) {
           if (\Config::get('app.debug')) {
              \Session::put('error', 'Connection timeout');
              return Redirect::route('donate');
           } else {
              \Session::put('error', 'Some error occur, sorry for inconvenient');
              return Redirect::route('donate');
           }
      }
foreach ($payment->getLinks() as $link) {
        if ($link->getRel() == 'approval_url') {
           $redirect_url = $link->getHref();
           break;
        }
      }

      /** add payment ID to session **/
      \Session::put('paypal_payment_id', $payment->getId());
if (isset($redirect_url)) {
         /** redirect to paypal **/
         return Redirect::away($redirect_url);
      }

      \Session::put('error', 'Unknown error occurred');
      return Redirect::route('/');
    }

    public function getPaymentStatus(Request $request)
    {
      /** Get the payment ID before session clear **/
      $payment_id = Session::get('paypal_payment_id');
      /** clear the session payment ID **/
      Session::forget('paypal_payment_id');
      if (empty($request->PayerID) || empty($request->token)) {
         session()->flash('error', 'Payment failed');
         return Redirect::route('donate');
      }
      $payment = Payment::get($payment_id, $this->_api_context);
      $execution = new PaymentExecution();
      $execution->setPayerId($request->PayerID);
      /**Execute the payment **/
      $result = $payment->execute($execution, $this->_api_context);

      if ($result->getState() == 'approved') {
         session()->flash('success', 'Donated successfully');
         return Redirect::route('donate');
      }
      session()->flash('error', 'Payment failed');
      return Redirect::route('donate');
    }


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
