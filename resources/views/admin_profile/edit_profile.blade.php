<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil Admin</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Edit Profil Admin</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('edit_profile') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nik">NIK:</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="{{ $profile_admins->nik }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $profile_admins->nama }}">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tempatLahir">Tempat Lahir:</label>
                                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="{{ $profile_admins->tempat_lahir }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tanggalLahir">Tanggal Lahir:</label>
                                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="{{ $profile_admin->tanggal_lahir }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $profile_admin->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="noTelp">No. Telp:</label>
                            <input type="text" class="form-control" id="noTelp" name="noTelp" value="{{ $profile_admin->no_telp }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $profile_admin->email }}">
                        </div>
                        <div class="form-group">
                            <label for="jenisKelamin">Jenis Kelamin:</label>
                            <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                                <option value="L" {{ $profile_admin->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $profile_admin->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
