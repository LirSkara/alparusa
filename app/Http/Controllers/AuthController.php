<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function register_process(Request $data) {
        
        $valid = $data->validate([
            'tel' => ['required', 'string', 'min:9'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required']
        ]);

        $user = User::create([
            'tel' => $data['tel'],
            'password' => bcrypt($data['password']),
        ]);

        if ($user) {
            auth('web')->login($user);
        }
        
        return redirect()->route('home');
    }

    public function login_process(Request $request) {
        $data = $request->validate([
            'tel' => ['required', 'string', 'min:9'],
            'password' => ['required', 'min:8']
        ]);
    
        if (auth('web')->attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('sign_in')->withErrors([
                'tel' => 'Телефон или пароль не совпадают'
            ]);
        }
    }

    public function exit()
    {
        auth('web')->logout();
        return redirect()->route('login');
    }
}
