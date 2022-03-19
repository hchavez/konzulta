<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MedicationController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('check_admin');

Route::resource('patients', PatientController::class);

Route::resource('consultations', ConsultationController::class);

Route::resource('medications', MedicationController::class);