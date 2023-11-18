<?php

namespace App\Http\Controllers;

use App\Models\Listcuti;
use Illuminate\Http\Request;
use App\Models\Permintaan;
// use App\Models\Listcuti;
use App\events;
use DB;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has("name")) {
            $data = Listcuti::all();
            return view("dashboard_yogi_karyawan");
        }
    }

    public function form_ajukan_cuti()
    {
        return view("form_pengajuan_cuti_fandi");
    }

    public function home_hrd()
    {
        return view("dashboard_hrd_gilang_pending");
    }

    public function dashboard_approved()
    {
        return view("dashboard_biah_approved");
    }

    public function dashboard_reject()
    {
        return view("rejectDetail_faiz");
    }
}