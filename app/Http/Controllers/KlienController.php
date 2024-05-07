<?php

namespace App\Http\Controllers;

//import model DataKlien
use App\Models\DataKlien;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class KlienController extends Controller
{
    //untuk membuat fungsi melihat admin_klien.blade.php
    public function index() : View //mengunakan fungsi view
    {

        //Untuk Menampilkan Data Dari Tabel_dataKlien
        $data_kliens = DataKlien::latest()->paginate(10);
        //paginate 10 memuncul kan data maksimal 10 jika lebih akan
        //muncul paginasi

        //melakukan pengembalian ke laman admin klien dengan isi DataKlien
        return view('admin_laman.admin_klien', compact('data_kliens'));
    }

    
    /** 
     * create
     *
     * @return View
     */
    public function create(): View
    {
        //controller yang berfungsi untuk menampilkan laman create data
        return view('admin_klien.create_data');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'         => 'required|min:5', // nama yang dimasukan minimal 5 karakter
            'nama_wali'    => 'required|min:5',
            'alamat'       => 'required|min:15',
            'no_telepon'    => [
                'required',
                'min:10', // Ubah minimal 15 ke 10 karena nomor telepon mungkin lebih pendek
                'regex:/^(\+?62|0)8[1-9]\d{6,}$/' // Format nomor telepon Indonesia, dimulai dengan 08 dan memiliki panjang minimal 10 digit
            ],
            'paket'        => 'required',
            'jenis_kelamin'=> 'required'
        ]);

       
        //mengambil data dari model data klien
        DataKlien::create([
            'nama'         => $request->nama,
            'nama_wali'    => $request->nama_wali,
            'alamat'       => $request->alamat,
            'no_telepon'   => $request->no_telepon,
            'paket'        => $request->paket,
            'jenis_kelamin'=> $request->jenis_kelamin,
        ]);

        //redirect to index // menampilkan laman index
        return redirect()->route('admin_klien.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
         * edit
         *
         * @param  mixed $id
         * @return View
         */
        public function edit(string $id): View
        {
            //mendapatkan ID dari tabel data klien 
            $data_kliens = DataKlien::findOrFail($id);

            //menampilkan laman edit data yang datanya diambil dari data klien
            return view('admin_klien.edit_data', compact('data_kliens'));
        }

        /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama'         => 'required|min:5', // nama yang dimasukan minimal 5 karakter
            'nama_wali'    => 'required|min:5',
            'alamat'       => 'required|min:15',
            'no_telepon'    => [
                'required',
                'min:10', // Ubah minimal 15 ke 10 karena nomor telepon mungkin lebih pendek
                'regex:/^(\+?62|0)8[1-9]\d{6,}$/' // Format nomor telepon Indonesia, dimulai dengan 08 dan memiliki panjang minimal 10 digit
            ],
            'paket'        => 'required',
            'jenis_kelamin'=> 'required'
        ]);

        //mendapatkan ID dari tabel
        $data_kliens = DataKlien::findOrFail($id);


            //update product without image
            $data_kliens->update([
                'nama'         => $request->nama,
                'nama_wali'    => $request->nama_wali,
                'alamat'       => $request->alamat,
                'no_telepon'   => $request->no_telepon,
                'paket'        => $request->paket,
                'jenis_kelamin'=> $request->jenis_kelamin,
            ]);


        //redirect to index //menampilkan laman index
        return redirect()->route('admin_klien.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    //fungsi untuk menghapus
    public function destroy($id): RedirectResponse
    {
        //mendapatkan ID dari tabel
        $data_kliens = DataKlien::findOrFail($id);

        //menghapus data dari tabel yang ID nya sudah ditemukan 
        $data_kliens->delete();

        //redirect to index / menampilkan laman index
        return redirect()->route('admin_klien.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
        



