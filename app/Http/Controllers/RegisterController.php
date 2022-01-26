<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
        'title' => 'REGISTER'
        ]);
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required|max:100',
        'username' => ['required', 'min:5', 'max:50', 'unique:users'],
        'email' => ['required', 'email', 'unique:users'],
        'roles' => ['required'],
        'password' => 'required|min:6|max:100'
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    $create = User::create($validatedData);

    if ($create) {
        alert()->success('Success','Registration Successfull!! Please Login');
        return redirect('/login')->with('success', 'Registration Successfull!! Please Login');
    }
    alert()->error('Error','Opps, Member Cannot Be Deleted!');
    return redirect('/register');

    
    }
}