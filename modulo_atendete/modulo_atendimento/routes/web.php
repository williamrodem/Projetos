<?php

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
use App\Http\Controllers\AtenderController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Controller;

Route::get('/cadastro_medico', [DoctorController::class, 'index']);
Route::get('/cadastro_paciente', [PatientController::class, 'index']);
Route::post('/cadastro_medico', [DoctorController::class, 'store']);
Route::post('/cadastro_paciente', [PatientController::class, 'store']);
Route::get('/atendimento', [AtenderController::class, 'atendimento']);
Route::post('/atendimento', [AtenderController::class, 'store']);
Route::get('/',[Controller::class, 'index']);
Route::get('/dashboard', [AtenderController::class, 'dashboard']);
Route::delete('/atendimeto/{id}', [AtenderController::class, 'destroy']);

