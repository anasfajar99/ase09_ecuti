<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login_karyawan');
});

Route::get('/home',[DasboardController::class,'index']);
Route::POST('/auth',[loginController::class,'auth']);
Route::get('/Form_Pengajuan_Cuti',[DasboardController::class,'Form_Pengajuan_CUti']);
Route::get('/dashboard_hrd',[DasboardController::class,'dashboard_hrd']);
Route::get('/dashboard_approved',[DasboardController::class,'dashboard_approved']);
