<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\AdminFormController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('login', [HomeController::class, 'login'])->name('login');

// Route form Controller

Route::get('/admin_form', [AdminFormController::class, 'index']);

Route::resource('admin_dashboard',AdminDashboardController::class);
// Route::get('admin_dashboard', [AdminDashboardController::class,'index'])->nama('dashboard');

// Route::get('admin_klien', [KlienController::class, 'index'])->name('klien');

//membuat rute admin_klien
Route::resource('admin_klien', \App\Http\Controllers\KlienController::class);

// Route Controller Buat SideBar

Route::get('/admin_profile', function () {
    // Logika untuk menampilkan halaman profile
    return view('profile');
})->name('profile');


//sasa admin kehadiran
Route::get('/kehadiranklien', function () {
    return view('admin_kehadiran.kehadiranklien');
});

Route::get('/riwayatkehadiranklien', function () {
    return view('admin_kehadiran.riwayatkehadiranklien');
});

Route::get('/klien2', function () {
    return view('admin_kehadiran.klien2');
});
