<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login-azmi');
    }

    public function auth(Request $request){
        $username = $request->username;
        $password = $request->password;
// dd([$username, $password]);
        if($username == 'admin' && $password == 'admin'){
            return redirect('/home');
        }elseif($username == 'user' && $password == 'user'){
            return redirect('/dashboard_HR');
        }else{
            return "kombinasi password dan username salah";
        }
    }
}
