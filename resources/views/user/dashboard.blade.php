<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/user-dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <title>Menu</title>
</head>
<body>
    <div class="dash__container">
        <!-- Navigasi sebelah kiri -->
        <div class="dash__menu">
            <div class="dash__menu__close">
                <img src="../assets/Cancelblue.svg" alt="close" onclick=closeNav()>
            </div>
            <div class="dash__menu__logo">
                <img src="../assets/kynesia-white.png" alt="logo">
                <h1>Kynesia</h1>
            </div>
            <div class="dash__menu__list">
                <ul>
                    <li> <img src="../assets/Newspaper.svg"> Beasiswa</li>
                    <li> <img src="../assets/Users.svg"> Akun</li>
                    <li> <form action="/logout" method="get">@csrf<button> Logout </button></form> </li>
                </ul>
            </div>
        </div>

        <!-- Detail rincian sebelah kanan -->
        <div class="dash__detail">

            <div class="dash__detail__profile">
                <div class="dash__detail__profile__name">
                    <div class="dash__detail__profile__name__hamburger" onclick=openNav()>
                        <img src="../assets/BurgerBlack.svg" alt="burger">
                    </div>
                    <h2>{{Auth::user()->id}}</h2>
                </div>
                <div class="dash__detail__profile__email">
                    <h3>{{ auth()->user()->email }}</h3>
                    <div class="dash__detail__profile__email__photo">
                        
                    </div>
                </div>
            </div>

            <div class="dash__detail__header">
                <div class="dash__detail__header__wrap">
                    
                    <div class="dash__detail__header__wrap__title">
                        <p>Beasiswa</p>
                    </div>
                    <hr>

                    <div class="dash__detail__header__wrap__subtitle">
                        <h1>Kynesia Scholarship <br/> <span>v1.0</span> </h1>
                        <form action="/dashboard/datadiri"><button> Daftar </button></form>
                        <!-- <form action="/logout" method="get">@csrf<button> Logout </button></form> -->
                    </div>
                    <hr>

                    <div class="dash__detail__header__wrap__seleksi">
                        <div class="dash__detail__header__wrap__seleksi__jadwal">
                            <p class="p-yellow">Pendaftaran Beasiswa</p>
                            <p>15 - 25 Juni 2021</p>
                            <p class="p-yellow">Pengumuman Seleksi Tahap I</p>
                            <p>4 Juli 2021</p>
                            <p class="p-yellow">Pengumuman Seleksi Tahap II</p>
                            <p>7 - 14 Juli 2021</p>
                            <p class="p-yellow">Pengumuman Penerimaan Beasiswa</p>
                            <p>18 Juli 2021</p>
                        </div>
        
                        <div class="dash__detail__header__wrap__seleksi__hasil">
                            <div class="dash__detail__header__wrap__seleksi__hasil__title">
                                <p>Hasil Seleksi</p>
                            </div>
                            <hr>
                            <div class="dash__detail__header__wrap__seleksi__hasil__akhir">
                                <p>Belum Terdaftar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/nav.js"></script>
</body>
</html>