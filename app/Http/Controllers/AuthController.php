<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $user = User::where('username', $credentials['username'])->where(
            'active',
            '1'
        )->first();

        if ($user) {
            if (Hash::check($credentials['password'], $user->password)) {
                Session::put('user', $user);

                return redirect()->route('home');
            }
        }

        return back()->withErrors(['login' => 'username atau password salah / tidak aktif.']);
    }

    public function logout()
    {
        Session::forget('user');

        return redirect()->route('login');
    }
}
