<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
        return view('register');
    }

    public function welcome(Request $data){
        $name=$data['f_name'].' '.$data['l_name'];
        return view('welcomeregis',['nama'=>$name]);
    }
}
