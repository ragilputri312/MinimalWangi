<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
   //view untuk mengatur tampilan awal 
        return view('frontend.home.home');
    }

    public function about()
    {
       //untuk beralih ke tampilan about
        return view('frontend.about.about');
    }

    public function shop()
    {
       //untuk beralih ke tampilan shop
        return view('frontend.shop.shop');
    }

    public function contact()
    {
       //untuk beralih ke tampilan contact
        return view('frontend.contact.contact');
    }

    public function detail()
    {
       //untuk beralih ke tampilan contact
        return view('frontend.detail-shop.main');
    }
}

