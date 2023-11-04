<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index(){
        return view('dasboard');
    }
    
    public function Form_Pengajuan_Cuti(){
        return view('Form_Pengajuan_Cuti');
    }
    
    public function dashboard_hrd(){
        return view('dashboard_hrd_pending');
    }
    public function dashboard_approved(){
        return view('dashboard_approved');
    }
}