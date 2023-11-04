<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\login_adzmi    ;

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
    return view('login_adzmi');
});

Route::get('/home', [DashboardController::class, 'index']);
Route::get('/form_ajukan_cuti', [DashboardController::class, 'form_ajukan_cuti']);
Route::get('/dashboard_Hr', [DashboardController::class, 'dashboard_Hr']);
Route::get('/dashboard_approved', [DashboardController::class, 'dashboard_approved']);
Route::get('/dashboard_reject', [DashboardController::class, 'dashboard_reject']);
// Route::get('/home', [login_adzmi::class, 'index']);