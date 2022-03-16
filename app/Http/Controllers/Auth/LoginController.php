<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() 
    {
        return view('auth.login.index', [
            'title' => 'LOGIN'
        ]);
    }

    public function authenticate(Request $request) 
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            alert()->success('Success','Welcome To SIS Library');
            return redirect()->intended('/');
        }
        alert()->error('Error','Login Failed!');
        return back()->with('danger', 'Login Failed!');
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        Session::flush();

        $request->session()->forget('username');
        $request->session()->forget('password');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
