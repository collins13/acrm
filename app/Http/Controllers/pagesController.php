<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Project;
use App\Donate;
use App\Plan;
class pagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        
        return view('pages.services');
    }

    public function projects()
    {
        $projects = Project::all();
        return view('pages.projects', compact('projects'));
    }

    public function partnership()
    {
        return view('pages.partnership');
    }

    public function donate()
    {
        $plans = Donate::all();
        return view('pages.donate', compact('plans'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function radio()
    {
        return view('pages.radio');
    }

    public function community()
    {
        return view('pages.community');
    }

    public function podcast()
    {
        return view('pages.podcast');
    }


    public function stripe()
    {
        return view('pages.stripe');
    }

    public function charge(Request $request){
        // dd($request->all());
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_PtCrCm27nCrvMIfSNami46BX00okKnz25c');
        
        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $request->input('stripeToken');
        
        $charge = \Stripe\Charge::create([
          'amount' => $request->amont * 100,
          'currency' => 'usd',
          'description' => 'Donation',
          'source' => $token,
          'metadata' => ['order_id' => '6735'],
        ]);

        $plan = new Plan();
        $plan->name = $request->name;
        $plan->email = $request->email;
        $plan->amount = $request->amont;
        $plan->save();
        session()->flash("success", "Thank you ".$request->name." we have received your donation, God bless you");
        return redirect()->back();
    }



}
