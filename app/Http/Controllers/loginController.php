<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login_karyawan');
    }

    public function logout(){
        return view('logout');
    }
    public function auth(Request $request){
        $username = $request->username;
        $password = $request->password;

        if($username == "admin" && $password == "admin"){
            return redirect('/home');
        }else if ($username == 'user' && $password == 'user') {
            return redirect('/dashboard_hrd');
        }else{
            return "kombinasi password dan username salah";
        }
    }
}
