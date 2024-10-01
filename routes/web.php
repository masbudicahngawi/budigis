<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PoiController;


Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/proses-login', [LoginController::class, 'prosesLogin'])->name('proses-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/poi', [PoiController::class, 'index'])->middleware('auth');
