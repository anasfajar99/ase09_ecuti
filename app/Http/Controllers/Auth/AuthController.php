<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Http\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('login_adzmi');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $auth = Pengguna::where('email', $credentials['email'])->first();

        if (!$auth) {
            return response()->json(['success' => false, 'message' => 'Not Login Successfull']);

        }
        if (!Hash::check($credentials['password'], $auth->password)) {
            return response()->json(['success' => false, 'message' => 'Not Login Successfull']);
        }
        session([
            'name' => $auth->name,
            'akses' => $auth->akses,
        ]);
        if ($auth->akses == 1) {
            return redirect('/home');
        } else if ($auth->akses == 2) {
            return redirect('/home_hrd');
        } else if ($auth->akses == 3) {
            return redirect('/home_hrd');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

}
