<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }

    public function index(){
        return view('dashboard_yogi');
    }

    public function form_ajukan_cuti(){
        return view('Form_Pengajuan_Cuti_fandi');
    }

    public function dashboard_hrd(){
        return view('dashboard_hrd_gilang_pending');
    }

    public function dashboard_reject(){
        return view('rejectDetail_faiz');
    }

    public function dashboard_approved(){
        return view('dashboard_biah_approved');
    }
}
