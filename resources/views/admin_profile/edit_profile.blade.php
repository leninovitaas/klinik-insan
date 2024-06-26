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
                    <form action="{{ route('profile.update' , $profile_admins->nik) }}" method="POST">
                        @csrf
                         @method('PUT')
                        <div class="form-group">
                            <label for="nik">NIK:</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror"  id="nik" name="nik" value="{{ old ('nik', $profile_admins->nik) }}">

                        <!-- error message untuk title -->
                        @error('nik')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"  id="nama" name="nama" value="{{ old ('nama', $profile_admins->nama) }}">

                            <!-- error message untuk title -->
                            @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tempatLahir">Tempat Lahir:</label>
                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"  id="tempat_lahir" name="tempat_lahir" value="{{ old ('tempat_lahir', $profile_admins->tempat_lahir) }}">
                            
                                <!-- error message untuk title -->
                                @error('tempat_lahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <label for="tanggalLahir">Tanggal Lahir:</label>
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"  id="tanggal_lahir" name="tanggal_lahir" value="{{ old ('tanggal_lahir', $profile_admins->tanggal_lahir) }}">
                           
                            <!-- error message untuk title -->
                            @error('tanggal_lahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror"  id="alamat" name="alamat" rows="3">{{ old ('alamat', $profile_admins->alamat) }}</textarea>
                        
                        <!-- error message untuk title -->
                        @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                        </div>
                        <div class="form-group">
                            <label for="noTelp">No. Telp:</label>
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror"  id="no_telp" name="no_telp" value="{{ old ('no_telp', $profile_admins->no_telp) }}">
                       
                        <!-- error message untuk title -->
                        @error('no_telp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"  id="email" name="email" value="{{ old ('email', $profile_admins->email) }}">
                       
                        <!-- error message untuk title -->
                        @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                            <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin', $profile_admins->jenis_kelamin) }}">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                            </select>

                            <!-- error message untuk title -->
                            @error('jenis_kelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

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
