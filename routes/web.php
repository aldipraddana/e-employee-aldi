<?php

use App\Http\Controllers\EmployeeInputController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\MonitoringController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MonitoringController::class, 'index']);

Route::get('/input-karyawan', [EmployeeInputController::class, 'index'])->name("input");
Route::post('/input-karyawan/store', [EmployeeInputController::class, 'store'])->name("input.store");

Route::get('/bantuan', [HelpController::class, 'index'])->name("help");
