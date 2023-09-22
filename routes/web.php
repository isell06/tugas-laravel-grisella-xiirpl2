<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
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
});

Route::resource('anggota', AnggotaController::class);

Route::resource('petugas', PetugasController::class);

//Route::resource('buku', BukuController::class);

Route::resource('rak', RakController::class);


/*Route::get('/about', function () {
    return view('layouts.master');
});

Route::get('/content', function () {
    return view('layouts.content.index');
});

Route::get('/create', function () {
    return view('layouts.content.create');
});*/


