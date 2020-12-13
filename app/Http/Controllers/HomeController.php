<?php

namespace App\Http\Controllers;

use App\Product;
use App\Certificate;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.home');
    }

    public function products($id)
    {
        $products = Product::where('category_id', $id)->where('status', 1)->get();

        return view('website.products', compact('products'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function certificate()
    {
        $certificates = Certificate::where('status', 1)->get();
        return view('website.certificate', compact('certificates'));
    }

    public function getContact()
    {
        $contact = Contact::first();
        return view('website.contact', compact('contact'));
    }


    public function contactUS(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: <" . $request->email . ">";
        $to = 'mahmoud_maher12345@yahoo.com';

        if (mail($to, $request->subject, $request->message, $headers)) {
            return Redirect::back();
        }
    }

    public function login()
    {
        return view('website.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return Redirect::to('admin/');
        } else {
            return Redirect::back()->with('msg', 'wrong username or password.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/home');
    }
}
