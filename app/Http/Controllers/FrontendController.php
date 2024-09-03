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

    public function software(){
        return view('frontend.software');
    }

    public function domain(){
        return view('frontend.services.domain');
    }

    public function hosting(){
        return view('frontend.services.hosting');
    }

    public function logo(){
        return view('frontend.services.logo');
    }

    public function sms_marketing(){
        return view('frontend.services.sms-marketing');
    }

    public function web_design(){
        return view('frontend.services.web-design');
    }
}
