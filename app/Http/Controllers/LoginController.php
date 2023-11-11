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
    public function auth(Request $request){
        $username = $request->username;
        $password = $request->password;

        $user = User::where('name', $username)->first();//dd([$username,$password]);
        if(!$user ) {
            return response()->json(['success'=>false, 'message' => 'Not Login successfull']);
        }
        if(!Hash::check($password, $user->password)){
            return response()->json(['success'=>false, 'message' => 'Not Login successfull']);
        }

        // set data session
        session{
            [
                'name' => $username,
                'akses' => $akses->akes
            ]
        }

        if($user->akses == 1){
            return redirect('/home');
        }else if($user->akses == 2){
            return redirect('/dashboard_Hr');
        }else if($user->akses == 3){
            return redirect('/dashboard_Hr');
        }
    }
     

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}