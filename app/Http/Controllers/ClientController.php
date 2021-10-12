<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.home');
    }

    public function shop()
    {
        # code...
        return view('client.shop');
    }

    public function cart()
    {
        # code...
        return view('client.cart');
    }

    public function checkout()
    {
        # code...
        return view('client.checkout');
    }
}
