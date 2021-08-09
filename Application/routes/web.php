<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;

use App\Http\Controllers;
use App\Http\Controllers\AttendeceController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TelephoneController;
use App\Http\Controllers\ValueController;
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
Route::get('/', [AttendeceController::class, 'index']);
Route::get('/doctors', [ DoctorController::class, 'index']);
Route::get('patient', [PatientController::class,'index']);
/*Route::resource('RegisteDoctors','RegisteDoctorsController' );*/
