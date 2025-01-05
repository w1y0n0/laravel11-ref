<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('/unit-kerja/data', [UnitKerjaController::class, 'data'])->name('unit-kerja.data');
Route::resource('/unit-kerja', UnitKerjaController::class); // hati" urutan route pengaruh

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/example', function () {
    return view('example');
});