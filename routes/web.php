<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('login', [HomeController::class, 'login'])->name('login');

// Route form Controller 

Route::resource('admin_dashboard',AdminDashboardController::class);

Route::get('admin_klien', [KlienController::class, 'index'])->name('admin_klien');

// Route Controller Buat SideBar

Route::get('/admin_profile', function () {
    // Logika untuk menampilkan halaman profile
    return view('profile');
})->name('profile');

