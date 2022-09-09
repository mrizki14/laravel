<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\HospitalController;
use Illuminate\Testing\LoggedExceptionCollection;

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
Route::get('/warga', [WargaController::class, 'index']);
Route::get('/warga/create', [WargaController::class, 'create']);
Route::post('/warga/store', [WargaController::class, 'store']);
Route::get('/warga/{id}/edit', [WargaController::class, 'edit']);
Route::put('/warga/{id}', [WargaController::class, 'update']);
Route::delete('/warga/{id}', [WargaController::class, 'destroy']);


Route::get('/data', [LoginController::class, 'login']);
Route::get('/login/store', [LoginController::class, 'create']);
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard'); 
Route::resource('diseases', DiseaseController::class);
Route::resource('hospitals', HospitalController::class);