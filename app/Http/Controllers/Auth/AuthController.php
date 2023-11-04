<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Http\Post;

class AuthController extends Controller
{
    public function index()
    {
        return view('login_adzmi');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $Pengguna = Pengguna::where('username', $credentials['username'])->first();

        if (!$Pengguna) {
            // Otentikasi gagal
            return back()->withErrors(['error' => 'Login gagal, cek kembali email dan password Anda.']);
        } else {
            return redirect('/home');
        }
    }

}
