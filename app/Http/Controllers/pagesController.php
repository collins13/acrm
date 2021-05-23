<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Project;
use App\Donate;
use App\Plan;
use App\Contact;
use App\Video;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Slider1;
use App\Slider2;
use App\Slider3;
class pagesController extends Controller
{

    public function main(Request $request)
    {
        $description = "SAMARITAN LAYMEN MINISTRIES we are faith based organization
         registered and based in New Jersey, USA. We have a Technical team of devoted
          Christian engineers and volunteers based in Nairobi, Kenya. It is beyond doubt
           that in Africa FM radio is the best media to reach millions of listeners.
            We support Christian organizations and Individuals to establish FM radio stations
             in their communities for advancement and sharing of the Gospel of Jesus Christ";

        SEOTools::setTitle('SAMARITAN LAYMEN MINISTRIES');
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url('/'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        // SEOTools::jsonLd()->addImage();

    $projects = Project::all();
    $contact = Contact::find(1);
    $video = Video::find(1);
    $slider1 = Slider1::find(1);
    $slider2 = Slider2::find(1);
    $slider3 = Slider3::find(1);
    return view('main', compact('projects', 'contact', 'video', 'slider1', 'slider2', 'slider3'));

        // return view('welcome');
    }

    public function about()
    {
        $video = Video::find(1);
        return view('pages.about', compact('video'));
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
