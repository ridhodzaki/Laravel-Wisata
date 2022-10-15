<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('pages.guest.login', [
            'title' => 'Login'
        ]);
    }

    public function auth(Request $request)
    {
        # code...
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // return $credentials;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        # code...
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
