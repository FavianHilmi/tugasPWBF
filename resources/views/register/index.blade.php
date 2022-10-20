<php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momma | Registration</title>
    <link href="assets/css/stylesreg.css" rel="stylesheet" />
</head>

<main>
<div class="wrapper">
        <!-- <div class="logo">
            <img src="assets/img/LogoeMomma.png" alt="" class="logo">
        </div> -->
        <h3 class=" align-text-center">Registration Form</h3>

        <form action="/register" method="post">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="nama" id="nama" placeholder="Nama">
            </div>
            
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="nik" id="nik" placeholder="NIK">
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="alamat" id="alamat" placeholder="Alamat">
            </div>
            
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="password" id="pwd" placeholder="Konfirmasi Password">
            </div>
            <button class="btn mt-3">Register</button>
        </form>

            <small>Sudah punya akun? <a href="/login">Login</a></small>

    </div>
</main>
</php>