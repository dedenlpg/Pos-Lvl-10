<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('loginIndex');
    Route::get('/daftar', 'daftar')->name('daftarIndex');
});




