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
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
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
                <input type="text" name="password" id="pwd" placeholder="Confirm Password">
            </div>
            <button class="btn mt-3">Register</button>
        </form>
        <div class="text-center fs-6">
            Already have an account? <a href="/login">Login now</a>
        </div>
    </div>
</body>
</html>