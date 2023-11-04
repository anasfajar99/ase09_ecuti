<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dasboard_yogi_karyawan');
    }

    public function form_ajukan_cuti(){
        return view('Form_Pengajuan_Cuti_fandi');
    }

    public function dashboard_Hr(){
        return view('dashboard_hrd_gilang_pending');
    }
}
