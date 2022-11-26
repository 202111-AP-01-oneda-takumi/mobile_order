<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.top');
    }

    public function userList()
    {
        return view('admin.userList');
    }

    public function menuList()
    {
        return view('admin.menuList');
    }

    public function userEdit()
    {
        return view('admin.userEdit');
    }

    public function menuEdit()
    {
        return view('admin.menuEdit');
    }

}
