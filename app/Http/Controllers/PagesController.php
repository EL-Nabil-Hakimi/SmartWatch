<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $products = Product::take(3)->latest()->get();
        $countres = Reservation::where('user_id' , session()->get('user_id'))->count();
        $user = User::find(session()->get('user_id'));
        return view('index' , compact('products' , 'user' , 'countres'));
    }

    public function contact(){
        $user = User::find(session()->get('user_id'));
        $countres = Reservation::where('user_id' , session()->get('user_id'))->count();

        return view('contact' , compact('user' , 'countres'));
    }

    public function services(){
        $products = Product::take(3)->latest()->get();

        $user = User::find(session()->get('user_id'));
        $countres = Reservation::where('user_id' , session()->get('user_id'))->count();
        return view('services' , compact('user' , 'countres' , 'products'));
    }

    public function shop(){
        $user = User::find(session()->get('user_id'));
        $products = Product::latest()->get();

        $countres = Reservation::where('user_id' , session()->get('user_id'))->count();

        return view('shop' , compact('user' , 'countres' , 'products'));  
    }


    public function cart(){
        $user = User::find(session()->get('user_id'));
        $products = Reservation::with('product')
                ->where('user_id', session()->get('user_id'))
                ->get();
        $countres = $products->count();
        return view('cart' , compact('user' , 'countres' , 'products') );
    }
    public function checkout(){
        // dd('fff');

        return view('checkout');
    }
    


    //donne moi les page login etpassword
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function error(){
        return view('error');
    }
    
}
