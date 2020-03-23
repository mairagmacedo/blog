<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthConreller extends Controller
{
    public function deshboard(){
        if(Auth::check() == true){
            return view('admin.deshboard');
        }
        return redirect() ->route('login');

    }
    public function showLogin(){
        return view('admin.formlogin');

    }
}
