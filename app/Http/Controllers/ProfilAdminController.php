<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class ProfilAdminController extends Controller
{
    public function showProfile()
    {
        // Logika untuk menampilkan halaman profil admin
        // Misalnya, kita akan mengambil data admin dari database
        $admin = Admin::find(auth()->user()->admin_id); // Ubah sesuai dengan cara Anda mengatur relasi antara user dan admin

        // Pastikan data admin ditemukan
        if (!$admin) {
            abort(404); // Jika data admin tidak ditemukan, kembalikan halaman 404
        }

        return view('profile', compact('admin'));
    }
}
