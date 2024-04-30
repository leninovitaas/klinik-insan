<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileAdmin;
use Illuminate\Contracts\View\View;

class ProfilAdminController extends Controller
{
    public function index() : View
    {
        $profile_admins = ProfileAdmin::all();
        return view('admin_profile.profile', compact('profile_admins'));
    }

    public function showProfile($nik) : View
    {
        $profile_admins = ProfileAdmin::findOrFail($nik);
        return view('admin_profile.profile_detail', compact('profile_admins'));
    }

    public function editProfile(){
        return view('admin_profile.edit_profile');
    }
}
