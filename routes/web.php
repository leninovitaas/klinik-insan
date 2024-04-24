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

Route::get('admin_klien', [KlienController::class, 'index'])->name('admin_klien');

