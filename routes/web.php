<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\KlienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('login', [HomeController::class, 'login'])->name('login');

Route::get('/Data_Klien', [KlienController::class, 'index']);

// Route form Controller 

Route::resource('admin_form',AdminFormController::class);

Route::get('admin_klien', [KlienController::class, 'index'])->name('admin_klien');

