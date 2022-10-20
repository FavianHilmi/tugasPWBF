<!DOCTYPE html>
<html>
<head>
<title>Kalkulator-Kesuburan</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/stylekalkulator2.css" rel="stylesheet" />
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-color: #38a7a3;
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a class="w3-bar-item w3-button w3-wide"> eMomma</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <!-- <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a> -->
      <a href="/page1" class="w3-bar-item w3-button"><i class="fa fa-angle-left"></i> KEMBALI</a>
    </div>
    <
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Kalkulator Kesuburan</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Kalkulator Kesuburan</span><br>
    <span class="w3-large">eMomma juga menyediakan fitur Kalkulator kesuburan.</span><br>
    <span class="w3-large">Fitur ini membantu dalam mengetahui tanggal masa subur dengan mudah.</span>
    <form action="/hitungHPHT.php">
  <label for="TGLHT">Hari Pertama Haid Terakhir (HPHT):></label><br>
  <input type="date" id="HPHT" name="HPHT">
  <input type="submit">
  </form>
  </div> 
  <!-- <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div> -->
</header>
</body>
</html>
