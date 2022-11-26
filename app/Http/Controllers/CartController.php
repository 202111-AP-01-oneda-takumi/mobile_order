<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {
        $params = [
            'test' => 'あああ'
        ];
        return view('user.cart');
    }

}
