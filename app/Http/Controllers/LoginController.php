<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login-azmi');
    }
    
    public function logout(){
        return view('logout');
    }
}