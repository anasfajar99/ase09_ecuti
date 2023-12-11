<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listcuti;
use App\Models\Listcuti as ModelsListcuti;
use DB;

class DashboardController extends Controller
{
    public function index(Request $request){
        if ($request->session()->has('name')) {
            $data = Listcuti::get();
            return view('dasboard_yogi_karyawan',compact('data'));
        }
    }

    public function form_ajukan_cuti(){
        return view('Form_Pengajuan_Cuti_fandi');
    }

    public function dashboard_Hr(Request $request){
        if ($request->session()->has('name')) {
            $data = Listcuti::where('status',0)->get();
            $detail = [
                'pending' => Listcuti::where('status',0)->count(),
                'diterima' => Listcuti::where('status',1)->count(),
                'ditolak' => Listcuti::where('status',2)->count(),
            ];
            return view('dashboard_hrd_gilang_pending',compact('data', 'detail'));
        }
    }

    public function dashboard_Hr_reject(Request $request){
        if ($request->session()->has('name')) {
            $data = Listcuti::where('status',2)->get();
            $detail = [
                'pending' => Listcuti::where('status',0)->count(),
                'diterima' => Listcuti::where('status',1)->count(),
                'ditolak' => Listcuti::where('status',2)->count(),
            ];
            // dd($detail);
            return view('rejectDetail_faiz',compact('data','detail'));
        }
    }

    public function dashboard_Hr_approved(Request $request){
        if ($request->session()->has('name')) {
            $data = Listcuti::where('status',1)->get();
            $detail = [
                'pending' => Listcuti::where('status',0)->count(),
                'diterima' => Listcuti::where('status',1)->count(),
                'ditolak' => Listcuti::where('status',2)->count(),
            ];
            return view('dashboard_biah_approved',compact('data','detail'));
        }
    }

    public function terimaCuti(Request $request){
        $id =  $request->id;
        $status = $request->status;

        try{
            DB::SELECT("UPDATE listcuti SET status = $status WHERE id = $id");
            return redirect('/dashboard_Hr');
        }catch(\Exception $e){
            return $e;
        }
    }
}
