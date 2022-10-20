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
<div class="wrapper">
        <div class="logo">
            <img src="assets/img/LogoeMomma.png" alt="" class="logo">
        </div>
   
        <form class="p-3 mt-3">
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
            <a href="#">Forget password?</a> or <a href="/register">Sign up</a>
        </div>
    </div>
</body>
</html>