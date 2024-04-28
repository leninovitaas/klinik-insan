<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BerandaDasboard</title>
        <link href="{{ asset('lp/css/admindashboard.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <style>
    
        </style>

    </head>
    <body>

                <div class="container-cs">
                    <!-- Memanggil Sidebar -->
                    @include('layouts.sidebar')
                    
                    <div class="content">
                        <div class="anakcontent">
                            <div class=" ">
                                <h1 class="txtdb"> Dashboard</h1>
                            </div>
                            <div class="kotak" >
                                <div class="isi">
                                    <h1 class="ini"> Halo, Yola Septianingrum! </h1>
                                    <h5 class="itu"> Apa yang anda butuhkan hari ini?</h5>
                                </div>
                                <div class="Klinik">
                                </div>
                            </div>
                            <div class="kotakbawah">
                                <div class="kotakdalam">
                                    <div class="kotakaktif">
                                        <h1 class="isikotakaktif"> 20  Jumlah Klien Aktif  </h1>
                                    </div>
                                    <div class="kotakaktif">
                                        <h1 class="isikotakaktif">  5  Jumlah Klien Non Aktif  </h1>
                                    </div>
                                    <div class="kotakaktif">
                                        <h1 class="isikotakaktif">  10 Jumlah Karyawan  </h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    </body>
</html>