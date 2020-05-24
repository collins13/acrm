<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.projects');
    }

    public function partnership()
    {
        return view('pages.partnership');
    }

    public function donate()
    {
        return view('pages.donate');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
