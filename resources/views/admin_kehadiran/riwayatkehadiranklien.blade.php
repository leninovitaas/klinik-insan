<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kehadiran Klien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #007bff;
            padding-top: 3rem;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #0056b3;

        }

        .navbar-brand img {
            max-width: 150px;
            max-height: 100px;
        }
        .main-content {
            margin-left: 100px;
            overflow-y: auto;
            max-height: calc(100vh - 3rem);
            overflow-x: hidden;
            position: fixed;
            padding-left: 5px;
            textarea.form-control {
                padding: 10px;
                height: 100px;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
            <a class="navbar-brand" href="#"><img src="/gambar/logo1.png" alt="Logo" width="100px" height="70"></a>
            </div>
        </nav>
        <h3 class="text-center text-white">Riwayat Kehadiran Klien</h3>
        <a href="#">Klien</a>
        <a href="#">Form</a>
        <a href="#">Kehadiran</a>
        <a href="#">Riwayat Kehadiran</a>
        <a href="#">Billing</a>

        <button class="btn btn-danger btn-block">Logout</button>
    </div>

    <!-- Page content -->
    <div class="container-fluid main-content">
        <div class="container mt-5">
            <h1>Riwayat Kehadiran Klien</h1>
<div class="mb-3">
    <label for="search" class="form-label">Search:</label>
    <input type="text" class="form-control" id="search" name="search">
</div>
            <table class="table">
                <thead>
                    <tr>
                    <th>No</th>
                     <th>Nama</th>
                    <th>Tanggal</th>
                     <th>Paket</th>
                    <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
