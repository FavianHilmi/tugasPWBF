<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EMomma Posyandu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="https://spesialis1.ikf.fk.unair.ac.id/wp-content/uploads/2019/02/logo-unair.png" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('HeroBiz/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('HeroBiz/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('HeroBiz/assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('HeroBiz/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('HeroBiz/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('HeroBiz/assets/css/variables.css')}}" rel="stylesheet">
  <link href="{{asset('HeroBiz/assets/css/main.css')}}" rel="stylesheet">

</head>
<body>
    @include('admin.partials.header')

    <div class="container-fluid" style="margin-top: 100px">

    <h1 class="text-center">Artikel Ilmiah</h1>
    <hr>
    <button class="btn btn-success m-1">Tambah</button>
    <hr>
        <div class="mb-3">
        <label for="formFile" class="form-label">Masukkan Gambar</label>
        <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kategori Artikel</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Kategori Artikel...">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul Artikel</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Judul Artikel...">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Tulis Artikel</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </tbody>
        </table>
        </div>

      <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
</head>
<body>
    
</body>
</html>