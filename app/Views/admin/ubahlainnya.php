<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">    
 <title>Edit</title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('img/Universitas_Mulia.png') ?>">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
 <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/offcanvas/">



 <!-- Bootstrap core CSS -->
 <link href="/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



 <!-- Favicons -->
 <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
 <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
 <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
 <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
 <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
 <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
 <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
 <meta name="theme-color" content="#563d7c">


 
   <style>

        *,
        html,
        body {
         font-family: 'poppins', poppins;
        }


  .bd-placeholder-img {
   font-size: 1.125rem;
   text-anchor: middle;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
  }

  @media (min-width: 768px) {
   .bd-placeholder-img-lg {
    font-size: 3.5rem;
   }
  }
 </style>

 <title>Universitas Mulia</title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('img/Universitas_Mulia.png') ?>">
 <link rel="icon" type="image/x-icon" href="favicon.png" sizes="16x16">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
 </script>
    <!-- Custom styles for this template -->

       <link href="<?=base_url('/css/dashboard.css'); ?>" rel="stylesheet">

       <!-- Custom styles for this template -->

       <link href="<?=base_url('/css/dashboard.css'); ?>" rel="stylesheet">

      </head>

<body>

 <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Universitas Mulia</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
 
  <ul class="navbar-nav px-3">
   <li class="nav-item text-nowrap">
    <a class="nav-link" href="<?= site_url('logout') ?>">Sign out</a>
   </li>
  </ul>
 </nav>
 <div class="container mt-5">


  <div class="d-flex justify-content-center">
   <form action="/admin/updatelain/<?= $up['id_kuis_lainnya'];  ?>" method="post">
    <div class="card" style="width:40rem;">
     <div class="card-body">
      <?= csrf_field();  ?>
      <div class="form-group">
       <input type="hidden" name="id_kuis_lainnya" value="<?= $up['id_kuis_lainnya'];  ?>">
       <label for="pertanyaan"></label>
       <input type="text" value="<?= $up['pertanyaan'];  ?>" name="pertanyaan" id="pertanyaan" class="form-control" aria-describedby="helpId">
      </div>
      <button type="submit" class="btn btn-primary">Ubah</button>
      <a href="/admin/Listlainnya" class="btn btn-success">kembali</a>
     </div>
    </div>
   </form>
  </div>
 </div>






 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
 </script>
 <script>
  window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')
 </script>
 <script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
 </script>


 <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
 <script src="dashboard.js"></script>
  <script src="<?= base_url('js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('js/jquery.js') ?>"></script>
</body>

</html>