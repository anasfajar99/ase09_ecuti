<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login_adzmi');
    }

    public function logout(){
        return view('logout');
    }

    public function auth(Request $request){
        $username = $request->username;
        $password = $request->password;

        if($username == 'admin' && $password == 'admin'){
            return redirect('/home');
        }elseif($username == 'user' && $password == 'user'){
            return redirect('/dashboard_hrd_gilang_pending');
        }else{
            return "kombinasi password dan username salah";
        }
    }
}
