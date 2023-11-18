<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CutiController extends Controller
{
    public function inputCuti(Request $request){
        $alasan_cuti = $request->alasan_cuti;
        $lama_cuti = $request->lama_cuti;
        $tanggal_mulai_cuti = $request->tanggal_mulai_cuti;

        try{
            DB::table('listcuti')->insert([
                'id_karyawan' => '101',
                'alasan' => $alasan_cuti,
                'lama' => $lama_cuti,
                'tanggal_mulai_cuti' =>$tanggal_mulai_cuti
            ]);
        }catch(\Exception $e){
            return response()->json(['success'=>false, 'message' => $e]);
        }

        return redirect('/home');
    }
}
