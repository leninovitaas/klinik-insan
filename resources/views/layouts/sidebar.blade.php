
    <div class="aside">
        <div class="sidebar">
            <div class="profil">
                <img src="{{ asset('lp/images/logobaru.png') }}" width="100" style="border-radius: 50%; object-fit: cover;" height="80" alt="">
            </div>
            <div class="text">
                <ul>
                    <li><a href="{{route('admin_dashboard.index')}}">Dashboard</a></li>
                    <li><a href="{{route('admin_klien.index')}}">Klien</a></li>
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

    <style>
        
            .aside {
                width: 23%;
                height: 100%;
            }

            .sidebar {
                height: 100%; 
                width: 100%;
                background-color: #7ea1cd; 
            }

            .sidebar ul {
                list-style-type: none;
                padding-top: 35px;
                padding-left: 50px;
            }

            .sidebar ul li {
                margin-bottom: 10px;
            }

            .sidebar ul li a {
                color: black;
                text-decoration: none;
                padding: 10px;
                display: block;
            }

            .profil {
                padding-top: 50px;
                width: 50%;
                margin: auto;
                background-size: cover;
            }

            .tombol {
                display: flex;
                justify-content: space-between;
                padding: 4px;
                margin-left: 55px;
                border-color:  #333;
                border-radius: 5px;
                background-color:  #7ea1cd;
            }


    </style>