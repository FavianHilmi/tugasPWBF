<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momma | Login</title>
    <link href="assets/css/styleslog.css" rel="stylesheet" />
</head>
<body>
<main class="wrapper">
        <h3>Please Login</h3>
        <form action="/login" method="post">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" href="/page1">Login</button>
        </form>
        <div class="text-center fs-6">
            <small>Belum punya akun? <a href="/register">Registrasi</a></small>
        </div>
</main>
</body>
</html>