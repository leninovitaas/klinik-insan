<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboar Klien</title>
        <link href="{{ asset('lp/css/adminklien.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    </head>
    <body>

        <div class="container-cs">

            <div class="aside">
                <div class="sidebar">
                            <div class="profil">
                                <img src="{{ asset('admin-asset/logors.png') }}" width="100" style="border-radius: 50%; object-fit: cover;" height="80" alt="">
                            </div>
                            <div class="text">
                                <ul>
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Klien</a></li>
                                    <li><a href="#">Form</a></li>
                                    <li><a href="#">Kehadiran</a></li>
                                    <li><a href="#">Riwayat Kehadiran</a></li>
                                    <li><a href="#">Billing</a></li>
                                </ul>
                            </div>
                            <div class="logout">
                                <button class="tombol">
                                    <img src="{{ asset('admin-asset/Logout.png') }}" width="33" height="23" alt="Deskripsi Gambar">
                                    <span>Logout</span>
                                </button>
                            </div>
                        </div>
            </div>
            
            <div class="content">
                <div class="anakcontent">
                    <div style="margin-top: 50px;"></div>
                    <div style="background-color: #8bb2b2;  width:40%; margin:auto;  padding: 20px 40px; border-radius: 10px;">
                        <h1 style="text-align: center; font-weight:bold; color:black; "">Data Klien</h1>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">Cari :</h5>
                            <input type="text" placeholder="  Cari Klien..." style="margin-left:5px; border-radius:10px;">
                        </div>
                        <button class="btn btn-tambah">Tambah</button>
                    </div>
                <table class="table-klien">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nama Wali</th>
                            <th>Alamat</th>
                            <th>Telfon</th>
                            <th>Paket</th>
                            <th>L/P</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Yola Septia</td>
                            <td>Bpk Nyayola</td>
                            <td>Jl. takeran No. 123</td>
                            <td>081234567890</td>
                            <td>2</td>
                            <td>P</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Ilma Yups</td>
                            <td>Mam iNya</td>
                            <td>Jl. Suka Bangsa No. 17</td>
                            <td>081234567890</td>
                            <td>1</td>
                            <td>P</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Leni Novita</td>
                            <td>Uncle Lenov</td>
                            <td>Jl. Singaraja No. 22</td>
                            <td>081234567890</td>
                            <td>2</td>
                            <td>P</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Nihla SySya</td>
                            <td>Gma SySyaa</td>
                            <td>Jl. SampingParis No. 34</td>
                            <td>081234567890</td>
                            <td>4</td>
                            <td>P</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <!-- Isi data lainnya di sini -->
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </body>
</html>