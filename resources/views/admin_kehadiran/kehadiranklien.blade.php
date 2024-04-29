<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kehadiran Klien</title>
    <link href="style1.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container">
                            <a class="navbar-brand" href="#"><img src="/gambar/logo1.png" alt="Logo" width="100px" height="100"></a>
                        </div>
                    </nav>
                    <h3 class="text-center text-white">Kehadiran klien</h3>
                    <div class="kotak">
                        <a href="#">Dashboard</a>
                        <a href="#">Klien</a>
                        <a href="#">Form</a>
                        <a href="#">Kehadiran</a>
                        <a href="#">Riwayat Kehadiran</a>
                        <a href="#">Billing</a>
                    </div>
                    <button class="btn btn-danger btn-block">Logout</button>
                </div>
            </div>


            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="container mt-5">
                    <h1 class="text-center text-black">Absen Kehadiran Klien</h1>
                    <form action="http://127.0.0.1:8000/riwayatkehadiranklien#" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label for="paket" class="form-label">Paket</label>
                            <input type="text" class="form-control" id="paket" name="paket">
                        </div>
                        <div class="mb-3">
                            <label for="search" class="form-label">Keterangan:</label>
                            <input type="text" class="form-control" id="search" name="search">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
