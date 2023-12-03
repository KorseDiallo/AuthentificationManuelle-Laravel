<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardUser',[DashboardUserController::class,'dashboard']);

Route::get('/inscription', [UserController::class,'inscription']);
Route::post('/inscription', [UserController::class,'store']);
Route::get('/loggin', [UserController::class,'loggin']);
Route::post('/authentification', [UserController::class,'authentification']);

// ADMISTRATEUR
Route::get('/inscriptionAdmin', [AdminController::class,'inscription']);
Route::post('/inscriptionAdmin', [AdminController::class,'store']);
Route::get('/logginAdmin', [AdminController::class,'loggin']);
Route::post('/authentificationAdmin', [AdminController::class,'authentification']);


