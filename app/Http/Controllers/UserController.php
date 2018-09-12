<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;



class UserController extends Controller
{
    public function home (Request $request){
        return view ('user/home');
    }

    public function borrow(Request $request){
        return view ('user/borrow');
    }

    public function login(Request $request){
        return view('user/login');
    }

    
}
