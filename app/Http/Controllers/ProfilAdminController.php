<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileAdmin;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProfilAdminController extends Controller
{
    public function index() : View
    {
        $profile_admins = ProfileAdmin::all();
        return view('admin_profile.profile', compact('profile_admins'));
    }

    // public function showProfile($nik) : View
    // {
    //     $profile_admins = ProfileAdmin::findOrFail($nik);
    //     return view('admin_profile.profile_detail', compact('profile_admins'));
    // }

    // public function editProfile(){
    //     return view('admin_profile.edit_profile');
    // }

    // Fungsi untuk menampilkan halaman edit
    public function edit( Int $nik) : View
    {
        // Mengambil data profil admin berdasarkan ID
        $profile_admins = ProfileAdmin::findOrFail($nik);
        
        // Mengirim data profil admin ke view edit
        return view('admin_profile.edit_profile', compact('profile_admins'));
    }

    // Fungsi untuk menyimpan perubahan dari form edit
    public function update(Request $request, $nik) : RedirectResponse
    {
        // Validasi input jika diperlukan
        $validatedData = $request->validate([
            'nik' => 'required|numeric|digits:16',
            'nama' => 'required|string|max:50',
            'tempat_lahir' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:100',
            'no_telp' => 'required|string|max:13',
            'email' => 'required|email|max:25',
            'jenis_kelamin' => 'required|string|in:L,P',
        ]);

        // Mengambil data profil admin berdasarkan ID
        $profile_admins = ProfileAdmin::findOrFail($nik);

        // Memperbarui data profil admin dengan data baru
        $profile_admins->update($validatedData);


        // Redirect ke halaman lain atau tampilkan pesan sukses jika diperlukan
        return redirect()->route('profile.index')->with('success', 'Profil admin berhasil diperbarui.');
    }
}

