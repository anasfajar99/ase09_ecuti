<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard_yogi');
    }
    public function form_ajukan_cuti(){
        return view('form_ajukan_cuti_fandi');
    }
    public function dashboard_HR(){
        return view('dashboard_hrd_pending_gilang');
    }
    public function dashboard_approved(){
        return view('dashboard_approved_biah');
    }
    public function dashboard_reject(){
        return view('reject_detail_faiz');
    }
}
