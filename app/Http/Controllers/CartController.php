<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function cart(){
        // $carts = Cart::where('user_id', Auth::user()->id)->get();
        return view('cart');
    }
}
