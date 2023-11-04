<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permintaan;
use App\events;

class DashboardController extends Controller
{
    public function index()
    {
        // $karyawan = Permintaan::all();

        return view("dashboard_yogi_karyawan");
    }

    public function form_ajukan_cuti()
    {
        return view("form_pengajuan_cuti_fandi");
    }

    public function home_hrd()
    {
        return view("dashboard_hrd_gilang_pending");
    }
}