<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home'); //menampilkan halaman home
    }

    public function login()
    {
        return view('login'); //menampilkan halaman login
    }

}
