<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kehadiran Klien</title>
    <link href="style1.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <style>

    .container-cs{
    width: 100%;
    height: 100dvh;
    display: flex;
}

.aside {
    width: 23%;
    height: 100%;
}

.content {
    width: 100%;
    height: 100%;

}
        </style>

<body>
    <div class="container-cs">

        @include('layouts.sidebar')


            <!-- Main Content -->
            {{-- <div class="col-lg-9"> --}}
                <div class="content">
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
