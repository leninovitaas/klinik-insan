<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BerandaDasboard</title>
        <link href="{{ asset('lp/css/adminform.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <style>
    
        </style>

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
                        <form method="POST" action="{{'' }}"> <!-- Tambahkan kelas form-container -->
                                            <h2 class="alert alert-primary text-center mt-3">FORMULIR KLIEN</h2>

                                    <div class="form-container">
                                    <div class="label-kiri">
                                        <label for="nama">Nama:</label><br>
                                        <input type="text" id="name" name="name"><br>

                                        <label for="nama wali">Nama Wali:</label><br>
                                        <input type="text" id="nama wali" name="nama wali"><br>

                                        <label for="alamat">Alamat:</label><br>
                                        <input type="text" id="alamat" name="alamat"><br>
                                    </div>

                                    <div class="label-kanan">
                                        <label for="no_telepon">No Telepon:</label><br>
                                        <input type="text" id="no telepon" name="no telepon"><br>

                                        <label for="paket">Paket (1, 2, 3, 4):</label><br>
                                        <select id="paket" name="paket">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select><br>

                                        <label for="jenis kelamin" style="margin-top: 12px;">Jenis Kelamin :</label><br>
                                        <div class="bg-putih">
                                            <div class="jk">
                                            <select id="jenis kelamin" name="jenis kelamin">
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                
                                    <input type="submit" value="Simpan" class="save-button">
                                </form>
                          
                        </div>
                    </div>
                </div>
    </body>
</html>