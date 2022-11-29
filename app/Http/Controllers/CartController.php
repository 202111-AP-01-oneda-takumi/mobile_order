<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $menu = Menu::all();
        // dd($menu);
        return view('user.cart');
    }

}
