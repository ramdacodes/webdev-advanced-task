<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'Password');

        $user = User::where('username', $credentials['username'])->where(
            'active',
            '1'
        )->first();

        if ($user) {
            if (password_verify($credentials['password'], $user->Password)) {
                Auth::login($user);

                return redirect()->route('home');
            }
        }

        return back()->withErrors(['login' => 'username atau Password salah / tidak aktif.']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
