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
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>NIK</th>
                                <td>PYRMATS</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>PYRMATS</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>Malang</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>2000-01-01</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>Jl. Dr. Cipto No. 23, Malang</td>
                            </tr>
                            <tr>
                                <th>No. Telp</th>
                                <td>(0341) 555-1234</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>pyrm@example.com</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                    
                            <tr>
                                <th>Jabatan</th>
                                <td>Software Engineer</td>
                            </tr>
                            <tr>
                                <th>Departemen</th>
                                <td>IT</td>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <td>2022-01-01</td>
                            </tr>
                        </table>
                    </div>
                        <!-- Tombol Edit -->
                        <div class="container">
                           <div class="d-flex">
                             <div class="text-right flex-end">
                                 <a href="#" class="btn btn-primary">Edit</a>
                            </div>
                        </div>
                    </div>
    </div>
            </div>
        </div>
    </div>

</body>
</html>
