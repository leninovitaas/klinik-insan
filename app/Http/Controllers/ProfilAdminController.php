<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class ProfilAdminController extends Controller
{
    public function showProfile()
    {
        // Pastikan pengguna sudah terautentikasi
        if (!auth()->check()) {
            return redirect()->route('login'); // Redirect ke halaman login jika belum terautentikasi
        }

        // Ambil data admin yang sedang login
        $admin = Admin::findOrFail(auth()->user()->admin_id); // Ubah sesuai dengan cara Anda mengatur relasi antara user dan admin

        return view('profil', compact('admin'));
    }
}
