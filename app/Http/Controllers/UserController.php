<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{

    // ユーザー情報
    public function  info(Request $request)
    {
        return view('user.info');
    }


    // ログイン機能
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user.top'));
        }
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('user.top'));
        }

        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが違います。'
        ]);
    }

    public function loginForm()
    {
        return view('user.loginForm');
    }

    // 新規登録
    public function register(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user.top'));
        }

        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
        ]);

        DB::beginTransaction();
        try {
            $user = (new User())->create([
                'name' => $credentials['name'],
                'email' => $credentials['email'],
                'password' => Hash::make($credentials['password']),
            ]);
            DB::commit();
            return redirect(route('user.loginForm'));
        } catch (\Exception $e) {
            report($e);
            DB::rollBack();
        }
    }

    public function registerForm()
    {
        return view('user.registerForm');
    }



    /**
     * ログアウト
     * 
     *  @param Request $request
     *  @return void
     */

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('user.loginForm'));
    }
}
