<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/datapribadi.css">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Data Pribadi</title>
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
                    <h3>{{Auth::user()->email}}</h3>
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
                    <div class="dp__container__wrap__step__box__content active">
                        <img src="../assets/sheet.svg" alt="sheet">
                        <p>Data Pribadi</p>
                    </div>
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

            <div class="dp__container__wrap__form header-2">
            <form action='/dashboard/datadiri' method='post' id='submit-form'>
               @csrf
                <div class="form-content-1">
                    <p>Nama Lengkap Sesuai Identitas</p>
                    <input type="text" placeholder="Nama Lengkap" class="input-long" name="name">
                </div>
                <div class="form-content-2">
                    <div class="form-content-2-1">
                        <p>Nama Panggilan</p>
                        <input type="text" placeholder="Nama Panggilan" class="input-short" name="nickname">
                    </div>
                    <div class="form-content-2-2">
                        <p>Jenis Kelamin</p>
                        <select name="sex" id="sex" class="input-short">
                            <option name="sex" value="" disabled selected hidden class="option-1">Choose a Category</option>
                            <option name="sex" value="pria" class="option-1">Pria</option>
                            <option name="sex" value="wanita" class="option-1">Wanita</option>
                        </select>
                    </div>
                </div>
                <div class="form-content-3">
                    <div class="form-content-3-1">
                        <p>Tempat Lahir</p>
                        <input type="text" placeholder="Tempat Lahir" class="input-short" name="birthplace">
                    </div>
                    <div class="form-content-3-2">
                        <p>Tanggal Lahir</p>
                        <input type="date" class="input-short" name="birthdate">
                    </div>
                </div>
                <div class="form-content-4">
                    <div class="form-content-4-1">
                        <p>Nomor Handphone</p>
                        <input type="number" placeholder="Nomor Handphone" class="input-short" name="telephone">
                    </div>
                    <!-- <div class="form-content-4-2">
                        <p>Alamat Email</p>
                        <input type="email" placeholder="e-mail" class="input-short">
                    </div> -->
                </div>
                <div class="form-content-5">
                    <div class="form-content-5-1">
                        <p>Nomor Identitas (KTP/Paspor/KK)</p>
                        <select name="identity" id="identity" class="input-short">
                            <option value="" disabled selected hidden>Choose a Category</option>
                            <option name="id_type" value="ktp">KTP</option>
                            <option name="id_type" value="paspor">Paspor</option>
                            <option name="id_type" value="kk">KK</option>
                        </select>
                    </div>
                    <div class="form-content-5-2">
                        <p class="p-disabled">0</p>
                        <input type="text" placeholder="Nomor Identitas" class="input-short" name='id_number'>
                    </div>
                </div>
                <div class="form-content-6">
                    <p>Alamat Sesuai KTP</p>
                    <input type="text" placeholder="Alamat" class="input-long" name='address'>
                </div>
                <div class="form-content-7">
                    <div class="form-content-7-1">
                        <p>Kode Pos</p>
                        <input type="number" placeholder="Kode Pos" class="input-short" name="postal_code">
                    </div>
                    <div class="form-content-7-2">
                        <p>Kecamatan</p>
                        <input type="text" placeholder="Kecamatan" class="input-short" name="district">
                    </div>
                </div>
                <div class="form-content-8">
                    <div class="form-content-8-1">
                        <p>Kota/Kabupaten</p>
                        <input type="text" placeholder="Kota/Kabupaten" class="input-short" name="city">
                    </div>
                    <div class="form-content-8-2">
                        <p>Provinsi</p>
                        <input type="text" placeholder="Provinsi" class="input-short" name="province">
                    </div>
                </div>
                <div class="form-content-9">
                    <p>Alamat Saat Ini</p>
                    <div class="form-content-9-1">
                        <label class="switch" for="checkbox">
                            <input type="checkbox" name='checking_address' value='same' id="checkbox" onclick="myFunc()"/>
                            <div class="slider round"></div>
                        </label>
                        <p>Sama dengan KTP</p>
                    </div>
                </div>
                
                <!-- Jika Alamat tidak sama -->
                <div class="check-ktp">
                    <div class="form-content-10">
                        <p>Alamat Saat ini</p>
                        <input type="text" placeholder="Alamat" class="input-long" name='living_address'>
                    </div>
                    <div class="form-content-11">
                        <div class="form-content-11-1">
                            <p>Kode Pos</p>
                            <input type="number" placeholder="Kode Pos" class="input-short" name='living_code'>
                        </div>
                        <div class="form-content-11-2">
                            <p>Kecamatan</p>
                            <input type="text" placeholder="Kecamatan" class="input-short" name='living_district'>
                        </div>
                    </div>
                    <div class="form-content-12">
                        <div class="form-content-12-1">
                            <p>Kota/Kabupaten</p>
                            <input type="text" placeholder="Kota/Kabupaten" class="input-short" name='living_city'>
                        </div>
                        <div class="form-content-12-2">
                            <p>Provinsi</p>
                            <input type="text" placeholder="Provinsi" class="input-short" name='living_province'>
                        </div>
                    </div>
                </div>
                <!-- end Jika Alamat tidak sama -->

                <div class="form__medsos">
                    <p>Media Sosial</p>
                </div>

                <div class="form-content-13">
                    <div class="form-content-13-1">
                        <p>Instagram</p>
                        <input type="text" placeholder="Instagram" class="input-short" name='instagram'>
                    </div>
                    <div class="form-content-13-2">
                        <p>Twitter</p>
                        <input type="text" placeholder="Twitter" class="input-short" name='twitter'>
                    </div>
                </div>
                <div class="form-content-14">
                    <div class="form-content-14-1">
                        <p>Facebook</p>
                        <input type="text" placeholder="Facebook" class="input-short" name='facebook'>
                    </div>
                    <div class="form-content-14-2">
                        <p>Tiktok</p>
                        <input type="text" placeholder="Tiktok" class="input-short" name='tiktok'>
                    </div>
                </div>
                <div class="form-content-14">
                    <div class="form-content-14-1">
                        <p>Jalur Masuk</p>
                        <div class="radiobutton">
                            <input name="entrance_type" type="radio" id="snmptn" value="snmptn">
                            <label for="snmptn">SNMPTN</label>
                            <input name="entrance_type" type="radio" id="sbmptn" value="sbmptn">
                            <label for="sbmptn">SBMPTN</label>
                        </div>
                    </div>
                    <div class="form-content-14-2">
                        <p>Nomor Peserta</p>
                        <input type="number" placeholder="Nomor Peserta" class="input-short" name='test_id'>
                    </div>
                </div>

                <div class="form__pilihan">
                    <p>Pilihan Program Studi SNMPTN/SBMPTN </p>
                </div>

                <div class="form-content-15">
                    <div class="form-content-15-1">
                        <p>Program Studi</p>
                        <input type="text" placeholder="Program Studi" class="input-short" name="major1">
                        <input type="text" placeholder="Program Studi" class="input-short" name="major2">
                        <input type="text" placeholder="Program Studi" class="input-short" name="major3">
                    </div>
                    <div class="form-content-15-2">
                        <p>Perguruan Tinggi</p>
                        <input type="text" placeholder="Perguruan Tinggi" class="input-short-max" name="university1">
                        <input type="text" placeholder="Perguruan Tinggi" class="input-short-max" name="university2">
                        <input type="text" placeholder="Perguruan Tinggi" class="input-short-max" name="university3">
                    </div>
                    <div class="form-content-15-3">
                        <div class="radiobutton-2">
                            <div class="radiobutton-class">
                                <input type="radio" id="snmptn" name="pilih" value="snmptn">
                                <label for="snmptn">SNMPTN</label>
                            </div>
                            <div class="radiobutton-class">
                                <input type="radio" id="snmptn" name="pilih" value="snmptn">
                                <label for="snmptn">SNMPTN</label>
                            </div>                            <div class="radiobutton-class">
                                <input type="radio" id="snmptn" name="pilih" value="snmptn">
                                <label for="snmptn">SNMPTN</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <div class="form-content-button">
                    <form action='/dashboard'><button class="button-submit-1">Batal</button></form>
                    <button class="button-submit-2" type="submit" form='submit-form'>Simpan</button>
                </div>
            </div>

            <div class="dp__container__wrap__footer">
                <p>© 2021 Kynesia. All rights reserved</p>
            </div>
        
        </div>
    </div>

    <script src="../js/checkAddress.js"></script>
</body>
</html>