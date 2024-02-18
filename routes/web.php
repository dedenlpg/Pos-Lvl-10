<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('DashboardIndex');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('loginIndex');
    Route::get('/daftar', 'daftar')->name('daftarIndex');
});

Route::controller(ProdukController::class)->group(function () {
    Route::get('/produk', 'index')->name('ProdukIndex');
    Route::get('/import-produk', 'ProdukImport')->name('ProdukImport');
});



