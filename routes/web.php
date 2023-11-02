<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RakController;


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
    return view('perpustakaan.start');
})->middleware('auth');


Route::resource('anggotas', AnggotaController::class)->middleware('auth');

Route::resource('petugass', PetugasController::class)->middleware('auth');

Route::resource('rak', RakController::class)->middleware('auth');

Route::resource('buku', BukuController::class)->middleware('auth');

Route::controller(AuthController::class)->group(function() {
    //register form
    Route::get('/register', 'register')->name('auth.register');
    //store register 
    Route::post('/store', 'store')->name('auth.store');
    //login form
    Route::get('/login', 'login')->name('auth.login');
    //auth proses
    Route::post('/auth', 'auth')->name('auth.authentication');
    //logout
    Route::post('/logout', 'logout')->name('auth.logout');
    //dashboard page
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});
