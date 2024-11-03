<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Middleware untuk autentikasi dan akses dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route untuk halaman home
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/detail', [HomeController::class, 'detail']);