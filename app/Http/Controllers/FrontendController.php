<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function contact_us(){
        return view('frontend.contact-us');
    }

    public function contactsend(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'nullable',
            'address' => 'nullable',
        ]);

        $reciptionistMail = "admin@softhostit.com";
        $data = (object) [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'message' => $request->message,
        ];
        Mail::to($reciptionistMail)->send(new ContactMail($data));

        session()->flash('success', 'Thank you for contact us. We will notify you through your email or phone number.');

        return redirect()->back();
    }

    public function product(){
        return view('frontend.product.index');
    }

    public function product_xprinter(){
        return view('frontend.product.xprinter');
    }

    public function product_posprinter(){
        return view('frontend.product.posprinter');
    }

    public function career(){
        return view('frontend.career.index');
    }

    public function career_view(){
        return view('frontend.career.view');
    }
}
