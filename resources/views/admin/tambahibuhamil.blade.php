<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momma | Login</title>
    <link href="css/stylesreg.css" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="assets/img/LogoeMomma.png" alt="" width=100px height=100px>
        </div>
        <!-- <div class="text-center mt-4 name">
            eMomma
        </div> -->
        <form action ="/tambahibuhamil" method="post" class="p-3 mt-3">
            @csrf
            
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="user id" id="userName" placeholder="Id">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Nama" id="email" placeholder="Nama">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="NIK" id="pwd" placeholder="NIK">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Tanggal Lahir" id="pwd" placeholder="Tanggal Lahir">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Tinggi Badan" id="pwd" placeholder="Tinggi Badan">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Berat Badan" id="pwd" placeholder="Berat Badan">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Tekanan Darah" id="pwd" placeholder="Tekanan Darah">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Alamat" id="pwd" placeholder="Alamat">
            </div>
            <button class="btn mt-3">Tambah</button>
        </form>
        <!-- <div class="text-center fs-6">
            Already have an account? <a href="/login">Login now</a>
        </div> -->
    </div>
</body>
</html>         