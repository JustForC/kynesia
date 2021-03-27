<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/dataKeuangan.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/slider.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Kynesia - Data Keuangan</title>
</head>
<body>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="dp__container .header-1">
        <div class="dp__container__wrap">

            <div class="dp__container__wrap__header">
                <div class="dp__container__wrap__header__logo">
                    <img src="../assets/logo.png" alt="logo">
                </div>
                <div class="dp__container__wrap__header__profile">
                    <h3>{{Auth::user()->name}}</h3>
                    <div class="dp__container__wrap__header__profile__photo">
                        
                    </div>
                </div>
            </div>

            <div class="dp__container__wrap__title">
                <h1 class="head-1">Kynesia Scholarship</h1>
                <h1 class="head-2">Registration Form v1.0</h1>
            </div>

            <div class="dp__container__wrap__step">
                <div class="dp__container__wrap__step__box">
                <a href="/dashboard/datadiri">
                    <div class="dp__container__wrap__step__box__content active">
                        <img src="../assets/sheet.svg" alt="sheet">
                        <p>Data Pribadi</p>
                    </div>
                </a>
                    <div class="dp__container__wrap__step__box__content">
                        <img src="../assets/User.svg" alt="sheet">
                        <p>Keuangan</p>
                    </div>
                    <div class="dp__container__wrap__step__box__content">
                        <img src="../assets/User.svg" alt="sheet">
                        <p>Pendidikan</p>
                    </div>
                    <div class="dp__container__wrap__step__box__content">
                        <img src="../assets/User.svg" alt="sheet">
                        <p>Unduhan</p>
                    </div>
                </div>
            </div>


            <!-- mulai form keuangan -->

            <div class="money__container">
                <div class="money__container__wrap">

                    <div class="money-header">
                        <h1>Hirarki Keluarga (Termasuk Diri Sendiri)</h1>
                    </div>

                    <!-- DAD  -->
                <form action="/dashboard/datakeluarga" method="post" id='submit-form'>
                @csrf
                    <div class="money-dad">
                        <h2>Ayah</h2>
                    </div>
                    <input type="hidden" id="family_status" name="family_status[]" value="Ayah">
                    <div class="money-form">
                        <div class="money-form-1">
                            <div class="money-form-1-name">
                                <p>Nama</p>
                                <input type="text" name="name[]" id="name">
                            </div>
                            <div class="money-form-1-jk">
                                <p>Jenis Kelamin</p>
                                <select name="sex[]" id="sex">
                                    <option value="pria" name="sex[]" id="sex">Pria</option>
                                    <option value="wanita" name="sex[]" id="sex">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="money-form-2">
                            <div class="money-form-2-born">
                                <p>Tempat Lahir</p>
                                <input type="text" name="birthplace[]" id="birthplace">
                            </div>
                            <div class="money-form-2-date">
                                <p>Tanggal Lahir</p>
                                <input type="date" name="birthdate[]" id="birthdate">
                            </div>
                        </div>
                        <div class="money-form-3">
                            <div class="money-form-3-school">
                                <p>Pendidikan Terakhir</p>
                                <input type="text" name="education[]" id="education">
                            </div>
                            <div class="money-form-3-work">
                                <p>Pekerjaan</p>
                                <input type="text" name="job[]" id="job">
                            </div>
                        </div>
                        <div class="money-form-4">
                            <div class="money-form-4-status[]">
                                <p>Status</p>
                                <select name="status[]" id="status[]">
                                    <option value="Y" name="status[]" id="status">Y</option>
                                    <option value="N" name="status[]" id="status">N</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END DAD  -->

                    <!-- MOM  -->

                    <div class="money-dad">
                        <h2>Ibu</h2>
                    </div>
                    <input type="hidden" id="family_status" name="family_status[]" value="Ibu">
                    <div class="money-form">
                        <div class="money-form-1">
                            <div class="money-form-1-name">
                            <p>Nama</p>
                                <input type="text" name="name[]" id="name">
                            </div>
                            <div class="money-form-1-jk">
                                <p>Jenis Kelamin</p>
                                <select name="sex[]" id="sex[]">
                                    <option value="pria" name="sex[]" id="sex">Pria</option>
                                    <option value="wanita" name="sex[]" id="sex">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="money-form-2">
                            <div class="money-form-2-born">
                                <p>Tempat Lahir</p>
                                <input type="text" name="birthplace[]" id="birthplace">
                            </div>
                            <div class="money-form-2-date">
                                <p>Tanggal Lahir</p>
                                <input type="date" name="birthdate[]" id="birthdate">
                            </div>
                        </div>
                        <div class="money-form-3">
                            <div class="money-form-3-school">
                                <p>Pendidikan Terakhir</p>
                                <input type="text" name="education[]" id="education">
                            </div>
                            <div class="money-form-3-work">
                                <p>Pekerjaan</p>
                                <input type="text" name="job[]" id="job">
                            </div>
                        </div>
                        <div class="money-form-4">
                            <div class="money-form-4-status">
                                <p>Status</p>
                                <select name="status[]" id="status">
                                    <option value="Y" name="status[]" id="status">Y</option>
                                    <option value="N" name="status[]" id="status">N</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- END MOM  -->

                    <!-- Anak Ke-1  -->

                    <div class="money-dad">
                        <h2>Anak Ke-1</h2>
                    </div>
                    <input type="hidden" id="family_status" name="family_status[]" value="Anak">
                    <div class="money-form">
                        <div class="money-form-1">
                            <div class="money-form-1-name">
                            <p>Nama</p>
                                <input type="text" name="name[]" id="name">
                            </div>
                            <div class="money-form-1-jk">
                                <p>Jenis Kelamin</p>
                                <select name="sex[]" id="sex">
                                    <option value="pria" name="sex[]" id="sex">Pria</option>
                                    <option value="wanita" name="sex[]" id="sex">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="money-form-2">
                            <div class="money-form-2-born">
                                <p>Tempat Lahir</p>
                                <input type="text" name="birthplace[]" id="birthplace">
                            </div>
                            <div class="money-form-2-date">
                                <p>Tanggal Lahir</p>
                                <input type="date" name="birthdate[]" id="birthdate">
                            </div>
                        </div>
                        <div class="money-form-3">
                            <div class="money-form-3-school">
                                <p>Pendidikan Terakhir</p>
                                <input type="text" name="education[]" id="education">
                            </div>
                            <div class="money-form-3-work">
                                <p>Pekerjaan</p>
                                <input type="text" name="job[]" id="job">
                            </div>
                        </div>
                        <div class="money-form-4">
                            <div class="money-form-4-status">
                                <p>Status</p>
                                <select name="status[]" id="status">
                                    <option value="Y" name="status[]" id="status">Y</option>
                                    <option value="N" name="status[]" id="status">N</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- END MOM  -->

                    <div class="money-income">
                        <p>Total Pendapatan Orang Tua/Bulan</p>
                        <input type="number" name="networth" id="networth">
                    </div>
                </form>
                    <div class="money-button">
                    <form action='/dashboard'><button class="button-submit-1">Batal</button></form>
                        <button class="button-submit-2" type="submit" form='submit-form'>Simpan</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>