<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function reg_user(Request $request)
    {
        $data = $request->validate([
            'tel' => ['required', 'string', 'unique:users,tel'],
            'password' => ['required', 'confirmed']
        ]);

        $user = User::create([
            'tel' => $data['tel'],
            'password' => bcrypt($data['password']),
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect()->route('login');
    }

    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function sign(Request $request)
    {
        $data = $request->validate([
            'tel' => ['required', 'string'],
            'password' => ['required']
        ]);

        if (auth('web')->attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->withErrors([
                'tel' => 'Телефон или пароль введены неверно!'
            ]);
        }
    }
}
