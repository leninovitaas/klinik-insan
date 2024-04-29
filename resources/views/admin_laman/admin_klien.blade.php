<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Klien</title>
    <link href="{{ asset('lp/css/adminklien.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div class="container-cs">
        <!--Import Sidebar-->
        @include('layouts.sidebar')
        <div class="content">
            <div class="anakcontent">
                <div style="margin-top: 50px;"></div>
                <div style="background-color: #7ea1cd;  width:40%; margin:auto;  padding: 20px 40px; border-radius: 10px;">
                    <h1 style="text-align: center; font-weight:bold; color:black;">Data Klien</h1>
                </div>
                <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">Cari :</h5>
                        <input type="text" placeholder="  Cari Klien..." style="margin-left:5px; border-radius:10px;">
                    </div>
                    {{-- pakek tag a soale biar bisa mengunakan Href untuk route --}}
                    <a class="btn btn-primary" href="{{ route('admin_klien.create') }}">Tambah</a>
                    {{-- <button class="btn btn-tambah">
                    </button> --}}
                </div>
                <table class="table-klien">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nama Wali</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Paket</th>
                            <th>L/P</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Menggunakan fungsi forelse untuk mengambil data dari data klien --}}
                        @forelse ($data_kliens as $dataklien)
                        <tr>
                            {{-- dataklien menjadi variabel baru --}}
                            <td>{{$dataklien->nama}}</td>
                            {{-- mengambil nama dari dataklien --}}
                            <td>{{$dataklien->nama_wali}}</td>
                            <td>{{$dataklien->alamat}}</td>
                            <td>{{$dataklien->no_telepon}}</td>
                            <td>{{$dataklien->paket}}</td>
                            <td>{{$dataklien->jenis_kelamin}}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin_klien.destroy', $dataklien->id) }}" method="POST">
                                    <a href="{{ route('admin_klien.show', $dataklien->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('admin_klien.edit', $dataklien->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                                {{-- <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Hapus</button> --}}
                            </td>
                        </tr>
                        <!-- Isi data lainnya di sini -->
                        @empty
                        <!-- Tampilkan pesan jika tidak ada data -->
                        <tr>
                            <td colspan="7" class="text-center">
                                <div class="alert alert-danger">
                                    Data Klien belum Tersedia.
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- buat Paginasi jika data lebih dari 10 --}}
                {{ $data_kliens->links() }}
            </div>
        </div>
    </div>
    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>
</html>
