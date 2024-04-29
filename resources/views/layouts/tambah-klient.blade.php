<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Klien</title>
    <!-- Memanggil file CSS eksternal -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lp/css/styleform.css') }}">
</head>
<body>

<h2 class="alert alert-primary text center mt-3">FORMULIR KLIEN </h2>

<form method="POST" action="{{ route('klien_form.store') }}">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br> 

    <label for="nama wali">Nama Wali:</label><br>
    <input type="text" id="nama wali" name="nama wali"><br>

    <label for="alamat">Alamat:</label><br>
    <input type="text" id="alamat" name="alamat"><br>

    <label for="no telepon">No Telepon:</label><br>
    <input type="text" id="no telepon" name="no telepon"><br>

    <label for="paket">Paket (1, 2, 3, 4):</label>
        <select id="paket" name="paket">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <label for="jenis kelamin">Jenis Kelamin (P/L):</label>
        <input type="radio" id="jenis_kelamin_laki" name="jenis kelamin" value="L" checked>
        <label for="jenis kelamin_laki">Laki-laki</label>
        <input type="radio" id="jenis_kelamin_perempuan" name="jenis kelamin" value="P">
        <label for="jenis kelamin_perempuan">Perempuan</label>
        <br>

    <input type="submit" value="Simpan">
</form>

</body>
</html>