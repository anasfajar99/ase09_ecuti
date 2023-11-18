<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
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

        $user = User::where('name', $username)->first();
        if(!$user){
            return response()->json(['succes'=>false, 'message'=>'not login successfull']);
        }if (!Hash::check($password, $user->password)){
            return response()->json(['succes'=>false, 'message'=>'Not Login successfull']);
        }session([
            'name'=>$username,
            'akses'=>$user->akses
        ]);
        if($user->akses == 3){
            return redirect('/home');
        }else if($user->akses == 2){
            return redirect('/dashboard_Hr');
        }else if($user->akses == 1){
            return redirect('/dashboard_Hr');
        }
    }
}
