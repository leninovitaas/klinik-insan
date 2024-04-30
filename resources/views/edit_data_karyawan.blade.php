<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil Admin</title>
    <link href="{{ asset('css/editProfile.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Profil Admin</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updateProfile') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nik">NIK:</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="PYRMATS">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="PYRMATS">
                            </div>
                            <div class="form-group">
                                <label for="tempatLahir">Tempat Lahir:</label>
                                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="Malang">
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir:</label>
                                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="2000-01-01">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3">Jl. Dr. Cipto No. 23, Malang</textarea>
                            </div>
                            <div class="form-group">
                                <label for="noTelp">No. Telp:</label>
                                <input type="text" class="form-control" id="noTelp" name="noTelp" value="(0341) 555-1234">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="pyrm@example.com">
                            </div>
                            <div class="form-group">
                                <label for="jenisKelamin">Jenis Kelamin:</label>
                                <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
