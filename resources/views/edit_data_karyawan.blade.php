@extends('layouts.app')

@section('content')
    <h1>EDIT BIODATA KARYAWAN</h1>

    <form method="POST" action="{{ route('karyawan.update', $karyawan->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $karyawan->nik }}">
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}">
        </div>

        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $karyawan->tempat_lahir }}">
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $karyawan->tanggal_lahir }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat">{{ $karyawan->alamat }}</textarea>
        </div>

        <div class="form-group">
            <label for="no_telp">No Telp:</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $karyawan->no_telp }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $karyawan->email }}">
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <select class="form-control" id="jabatan" name="jabatan">
                <option value="{{ $karyawan->jabatan }}">{{ $karyawan->jabatan }}</option>
                @foreach ($jabatans as $jabatan)
                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="{{ $karyawan->jenis_kelamin }}">{{ $karyawan->jenis_kelamin }}</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a
