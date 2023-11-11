<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

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
Route::POST('/auth', [LoginController::class, 'auth']);
Route::get('/form_ajukan_cuti', [DashboardController::class, 'form_ajukan_cuti']);
Route::get('/dashboard_Hr', [DashboardController::class, 'dashboard_Hr']);
Route::get('/logout', [DashboardController::class, 'logout']);
// Route::get('/home', [login_adzmi::class, 'index']);