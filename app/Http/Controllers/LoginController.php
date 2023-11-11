<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use D8;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login_adzmi');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }

    public function auth(Request $request){
        $username = $request->username;
        $password = $request->password;

        // dd([$username, $password]);

        $user = User::where('name', $username)->first();
        if (!$user){
            return response()->json(['success'=>false, 'message'=>'Not Login Successfull']);
        }
        if (!Hash::check($password, $user->password)){
            return response()->json(['success'=>false, 'message'=>'Not Login Successfully']);
        }
        session(
            [
                'name' => $username,
                'akses' => $user->akses
                ]
        );
        
        if($user->akses == 1){
            return redirect('/home');
        }
        else if($user->akses == 2){
            return redirect('/dashboard_hrd_gilang_pending');
        }
        else if($user->akses == 3){
            return redirect('/dashboard_hrd_gilang_pending');
        }


        // if($username == 'admin' && $password == 'admin'){
        //     return redirect('/home');
        // }elseif($username == 'user' && $password == 'user'){
        //     return redirect('/dashboard_hrd_gilang_pending');
        // }else{
        //     return "kombinasi password dan username salah";
        // }
    }
}
