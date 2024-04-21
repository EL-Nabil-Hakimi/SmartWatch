<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function services(){
        return view('services');
    }

    public function shop(){
        return view('shop');
    }

    public function blog(){
        return view('blog');
    }
    public function cart(){
        return view('cart');
    }
    
}