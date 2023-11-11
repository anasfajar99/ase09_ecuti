<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(Request $request){
        if ($request->session()->has('name')) {
            return view('dashboard_yogi');
        }
    }

    public function form_ajukan_cuti(){
        return view('pengajuanCuti_fandi');
    }

    public function dashboard_Hr(){
        return view('dashboard_gilang_hrd_pending');
    }

    public function dashboard_approved(){
        return view('dashboard_siti_approved');
    }

    public function dashboard_reject(){
        return view('rejectDetail_faiz');
    }
}