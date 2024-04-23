<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('login', [HomeController::class, 'login'])->name('login');

// Route form Controller 

Route::resource('admin_form',AdminFormController::class);
