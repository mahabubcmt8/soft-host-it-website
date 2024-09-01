<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function team()
    {
        return view('frontend.team');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function register()
    {
        return view('frontend.sign-up');
    }

    public function payment()
    {
        return view('frontend.payment');
    }
}
