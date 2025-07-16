<?php

use App\Http\Controllers\AkunRobloxController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriGameController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return view('/layout/main');
});


Route::resource('/akun-roblox', AkunRobloxController::class);
Route::resource('/kategori-game', KategoriGameController::class);



