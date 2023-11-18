<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('login_');
// });

// ===============================================================
//login
Route::get('/', [AuthController::class, 'index']);
Route::post('/proses', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

// =============================================================
Route::get('/home', [DashboardController::class, 'index']);
Route::get('/form_ajukan_cuti', [DashboardController::class, 'form_ajukan_cuti']);

Route::get('/home_hrd', [DashboardController::class, 'home_hrd']);
Route::get('/dashboard_approved', [DashboardController::class, 'dashboard_approved']);
Route::get('/dashboard_reject', [DashboardController::class, 'dashboard_reject']);
Route::post('/inputCuti', [CutiController::class, 'inputCuti']);


