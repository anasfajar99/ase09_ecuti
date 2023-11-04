<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard_yogi_karyawan');
    }

    public function form_ajukan_cuti(){
        return view('pengajuan_cuti_fandi');
    }

    public function dashboard_Hr(){
        return view('dashboard_gilang_hrd_pending');
    }
    public function dashboard_approved(){
        return view('dashboard_approved_biah');
    }
    
    public function dashboard_reject(){
        return view('rejectDetail_faiz');
    }
}
