<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\FutsalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\HomeController;
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


Route::get('/',[HomeController::class, 'index']);
Route::get('/aboutus',[AboutusController::class, 'index']);
Route::get('/futsal',[FutsalController::class, 'index']);
Route::get('/contactus',[ContactusController::class, 'index']);
Route::get('/login', [LoginController::class,'login'])->name('login');

// Route::get('/aboutus', function () {
//     return view('aboutus');
// });

// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
