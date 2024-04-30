<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Jabatan;

class EditBioController extends Controller
{
    public function edit($id)
    {
        // Mengambil data karyawan berdasarkan ID
        $karyawan = Karyawan::findOrFail($id);
        
        // Mengambil daftar jabatan untuk digunakan dalam dropdown
        $jabatans = Jabatan::all();

        // Mengembalikan view edit karyawan beserta data karyawan dan daftar jabatan
        return view('karyawan.edit', compact('karyawan', 'jabatans'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan oleh form
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            // Tambahkan validasi untuk field lainnya sesuai kebutuhan
        ]);

        // Mengambil data karyawan berdasarkan ID
        $karyawan = Karyawan::findOrFail($id);

        // Memperbarui data karyawan dengan data yang dikirimkan melalui form
        $karyawan->update($request->all());

        // Redirect ke halaman lain atau tampilkan pesan berhasil
        return redirect()->route('route_name')->with('success', 'Biodata karyawan berhasil diperbarui.');
    }
}
