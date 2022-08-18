<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

 <!-- tittle -->
 <title>Home</title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('img/Universitas_Mulia.png') ?>">

 <!-- font -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600&display=swap" rel="stylesheet">
 
   <style>

        *,
        html,
        body {
         font-family: 'poppins', poppins;
        }


  *,
  htmml {
   font-family: 'Poppins', sans-serif;
  }

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap');

  .parallax {
   /* The image used */
   background-image:
    url("/img/slide-UM-001.jpg");

   /* Set a specific height */
   min-height: 570px;

   /* Create the parallax scrolling effect */
   background-attachment: fixed;
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;

  }
 </style>
    <!-- Custom styles for this template -->

       <link href="<?=base_url('/css/dashboard.css'); ?>" rel="stylesheet">

       <!-- Custom styles for this template -->

       <link href="<?=base_url('/css/dashboard.css'); ?>" rel="stylesheet">

      </head>

<body>
 <div class="container">
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-lg">
   <a class="navbar-brand mr-5 mt-2" href="#">
    <h3><strong>Universitas Mulia</strong></h3>
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <a href="login" class="btn btn-outline-primary m-2 my-sm-0">Login</a>
     <a href="register" class="btn btn-outline-danger">Daftar</a>
    </form>

   </div>
  </nav>
 </div>

 <div class="container my-5 py-4 ">
  <h2 class="display-3"><strong>Selamat Datang</strong></h2>
  <p class="card-text font-weight-thin">Bagi Alumni Universitas Mulia program Sarjana,
   Profesi, dan Pascasarjana. <br>
   yuk siapkan diri untuk mengisi Kuesioner tracer study.</p>
  <a class="px-3 py-2 btn btn-primary" href="login">Login </a>
  <a class="px-3 py-2 btn btn-danger" href="register">Daftar</a>
 </div>
 </div>
 <div class="container mt-5 pb-5">
  <div class="card bg-dark">
   <div class="parallax">
    <div class="card-img-overlay vertical-center">

    </div>
   </div>
  </div>
 </div>
 <div class="container">
  <div class="row mt-5">
   <h1 class="text-center mb-5">Langkah Pengisian Tracer Study Alumni</h1>
   <div class="d-flex justify-content-around">
    <div class="col ">
     <div class="card mb-3 shadow kart">
      <div class="card-header text-center">Langkah ke 1</div>
      <div class=" card-body">
       <h4 class="card-title font-weight-bold"><strong>TracerStudy</strong></h4> <br>
       <p class="card-text font-weight-thin">Mengakses halaman website <a href="/"> Tracer Study Universitas Mulia Balikpapan</a>
       </p>
      </div>
     </div>
    </div>
    <div class="col ">
     <div class="card mb-3 shadow kart">
      <div class="card-header text-center">Langkah ke 2</div>
      <div class=" card-body">
       <h4 class="card-title font-weight-bold"><strong>Registrasi</strong></h4> <br>
       <p class="card-text font-weight-thin">Mengakses halaman registrasi dengan klik tombol <a href="register">Daftar
         disini</a></p>
      </div>
     </div>
    </div>
    <div class="col ">
     <div class="card mb-3 shadow kart">
      <div class="card-header text-center">Langkah ke 3</div>
      <div class=" card-body">
       <h4 class="card-title font-weight-bold"><strong>Mengisi Data</strong></h4> <br>
       <p class="card-text font-weight-thin">Mengisi biodata pada
        halaman registrasi yang telah disediakan</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="row mt-4">
  <div class="container">
   <div class="d-flex justify-content-around">
    <div class="col ">
     <div class="card mb-3 shadow kart">
      <div class="card-header text-center">Langkah ke 4</div>
      <div class=" card-body">
       <h4 class="card-title font-weight-bold"><strong>login</strong></h4> <br>
       <p class="card-text font-weight-thin">Login menggunakan email dan password yang telah
        diinput</p>
      </div>
     </div>
    </div>
    <div class="col ">
     <div class="card mb-3 shadow kart">
      <div class="card-header text-center">Langkah ke 5</div>
      <div class=" card-body">
       <h4 class="card-title font-weight-bold"><strong>Halaman Dashboard</strong></h4>
       <p class="card-text font-weight-thin">Anda berada Dashboard khusus Alumni</p>
      </div>
     </div>
    </div>
    <div class="col ">
     <div class="card mb-3 shadow kart">
      <div class="card-header text-center">Langkah ke 6</div>
      <div class=" card-body">
       <h4 class="card-title font-weight-bold"><strong>Mengisi Kuesioner</strong></h4>
       <p class="card-text font-weight-thin">Tekan tombol Kuesioner dan isi Kuesioner</p>
      </div>
     </div>
    </div>

   </div>
  </div>
 </div>
 <div class="jumbotron-fluid bg-dark text-secondary py-3">
  <div class="container pt-2 mt-3">
   <div class="d-flex justify-content-between">
    <img src="\img\rektor\rektor-um-dr-mrusli (2).jpg" class="card-img shadow rounded mt-4" width="250px" height="250px" alt="" srcset="">
    <div class="d-inline p-5 ">
     <h2>
      DR. Muhammad Rusli, M.T
     </h2>
     <h4>
      REKTOR
     </h4>
     <p>Dalam lima tahun ke depan, sesuai dengan peta jalan atau roadmap pengembangan perguruan tinggi, Universitas Mulia diharapkan akan menjadi perguruan tinggi pembelajaran atau Teaching University, yakni perguruan tinggi yang fokus pada pengembangan kualitas pendidikan. Hingga pada 25 tahun ke depan Universitas Mulia diharapkan menjadi Global Technopreneurship Campus</p>
    </div>
   </div>
  </div>
 </div>


 <script src=" https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
 </script>
  <script src="<?= base_url('js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('js/jquery.js') ?>"></script>
</body>

</html>