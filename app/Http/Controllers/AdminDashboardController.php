<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
        // Fungsi untuk menampilkan tampilan "index"
        public function index()
        {
            // Mengembalikan tampilan "index.blade.php" dari direktori resources/views
            return view('admin_laman.admin_dashboard');
        }
}
