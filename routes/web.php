<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {return view('index'); });
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/filter-alat', [HomeController::class, 'filterAlat'])->name('filter.alat');
Route::get('/filter-produk', [HomeController::class, 'filterProduk'])->name('filter.produk');