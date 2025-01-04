<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/home', function () {
    return view('home');
});

Route::get('/example', function () {
    return view('example');
});