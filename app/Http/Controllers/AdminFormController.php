<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFormController extends Controller
{
    //
    public function index()
    {
        return view('admin_laman.admin_form'); // Mengembalikan view 'admin_form.blade.php'
    }
}
