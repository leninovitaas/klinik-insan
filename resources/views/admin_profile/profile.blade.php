<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL ADMIN</title>
    <link href="{{ asset('lp/css/profiladmin.css') }}" rel="stylesheet">
</head>
<body>


<div class="container-cs">
                    <!-- Memanggil Sidebar -->
                    @include('layouts.sidebar')
                    
                    <div class="content">
                        <div class="anakcontent">
    <div class="pr-adm">
        <h1>PROFIL ADMIN</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Informasi Pribadi</h3>
                    </div>
                    @foreach($profile_admins as $profile_admin)
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>NIK</th>
                                <td>{{ $profile_admin->nik }}</td>
                            </tr>

                            <tr>
                                <th>Nama</th>
                                <td>{{ $profile_admin->nama }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $profile_admin->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $profile_admin->tanggal_lahir->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $profile_admin->alamat }}</td>
                            </tr>
                            <tr>
                                <th>No. Telp</th>
                                <td>{{ $profile_admin->no_telp }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $profile_admin->email }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $profile_admin->jenis_kelamin }}</td>
                            </tr>
                        </table>
                    </div>
                        <!-- Tombol Edit -->
                        <div class="container">
                           <div class="d-flex">
                             <div class="text-right flex-end">
                             <a href="{{ route('edit_profile') }}" class="btn btn-primary">Edit</a>

                            </div>
                        </div>
                        @endforeach
                    </div>
    </div>
            </div>
        </div>
    </div>

</body>
</html>
