<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home_page(){
        return view('home');
    }
    public function add_client(){
        return view('add_client');
    }
    public function sign_in(){
        return view('sign_in');
    }
}
