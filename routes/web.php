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

route::get('/home', [DashboardController::class, 'index']);
route::get('/form_ajukan_cuti', [DashboardController::class, 'form_ajukan_cuti']);
route::get('/dashboard_hrd_gilang_pending', [DashboardController::class, 'dashboard_hrd']);
route::get('/dashboard_biah_approved', [DashboardController::class, 'dashboard_approved']);
route::get('/rejectDetail', [DashboardController::class, 'dashboard_reject']);
route::POST('/auth', [LoginController::class, 'auth']);
route::get('/logout', [LoginController::class, 'logout']);
