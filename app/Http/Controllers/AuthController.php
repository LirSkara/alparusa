<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function register_process(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'string', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
            'password2' => ['required', 'confirmed']
        ]);
    
        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'password2' => bcrypt($data['password2']),
        ]);
    
        if ($user) {
            auth('web')->login($user);
        }
    
        return redirect()->route('home');
    }

    public function login(){
        return view('login');
    }
    public function login_process(Request $request)
{
    $data = $request->validate([
        'email' => ['required', 'email', 'string'],
        'password' => ['required']
    ]);

    if (auth('web')->attempt($data)) {
        return redirect()->route('home');
    } else {
        return redirect()->route('login')->withErrors([
            'email' => 'Emial или пароль введены неверно!'
        ]);
    }
}
    public function exit()
    {
        auth('web')->logout();
        return redirect()->route('home');
    }
}
