<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listcuti;
use DB;

class DashboardController extends Controller
{

    public function index(Request $request){
        if ($request->session()->has('name')){
            // return view('dashboard_yogi_karyawan');
            $data = Listcuti::get();
            return view('dashboard_yogi_karyawan',compact('data'));
        }
    }
    

    public function form_ajukan_cuti(){
        return view('pengajuan_cuti_fandi');
    }

    public function dashboard_Hr(Request $request){
        $data = Listcuti::get()->where('status',0);
        return view('dashboard_gilang_hrd_pending', compact('data'));
    }
    public function dashboard_approved(){
        $data = Listcuti::get()->where('status',1);
        return view('dashboard_approved_biah', compact('data'));
    }
    
    public function dashboard_reject(){
        $data = Listcuti::get()->where('status',1);
        return view('rejectDetail_faiz', compact('data'));
    }

    public function terimaCuti(Request $request){
        $id = $request -> id;
        $status = $request -> status;

        try{
            DB::SELECT("UPDATE listcuti SET status = $status WHERE id = $id");
            return;
        }catch(\Exeption $e){
            return $e;
        }
    }
}
