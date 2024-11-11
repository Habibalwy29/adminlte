<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\SupplierController;

// Route default untuk halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk autentikasi
Auth::routes();

// Route untuk home
Route::get('/home', [app\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {
    // Route untuk menambah data supplier
    Route::post('/suppliers/tambah', [SupplierController::class, 'tambah_data'])->name('suppliers.tambah');
});
