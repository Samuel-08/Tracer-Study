<!doctype html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="<?= base_url('js/Chart.bundle.js') ?>"></script>
  <script src="<?= base_url('js/utils.js') ?>"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Universitas Mulia</title>
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

  <!-- Custom styles for this template -->
  <link href="<?= base_url('/css/dashboard.css'); ?>" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?= base_url('admin') ?>">Universitas Mulia</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?= site_url('logout') ?>">Sign out</a>
      </li>
    </ul>
  </nav>
  <?php
  if (session()->getFlashData('success')) {
  ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashData('success') ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php
  }
  ?>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link  " href="<?= base_url('admin') ?>">

                <?= session()->get('name') ?> <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/admin') ?>">

                Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/list')  ?>">
                List Alumni
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled font-weight-bold alert-secondary rounded" href="<?= base_url() ?>">

                Hasil Kuesioner
              </a>
            </li>
          </ul>
          <h6 class="sidebar-heading text-light rounded d-flex justify-content-between align-items-center mt-4 mb-n1  ">
            <h4 class="text-center text-light font-weight-light  px-3 py-4  bg-dark ">Kategori</h4>

          </h6>
          <ul class="nav flex-column mb-2 rounded">
            <li class="nav-item">
              <div class="accordion" id="contoHAccordion">
                <div class="card ">
                  <div class="card-header  bg-dark " id="Headers">
                    <h2 class="mb-0">
                      <button class=" btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#kollasps" aria-expanded="true" aria-controls="kollasps">
                        Testimonial
                      </button>
                    </h2>
                  </div>

                  <div id="kollasps" class="collapse " aria-labelledby="Headers" data-parent="#contoHAccordion">
                    <div class="card-body">
                      <small class="d-block text-center mb-3 "><a href="<?= base_url('admin /inputKuis') ?>">Buat & Lihat Pertanyaan</a></small>
                    </div>
                  </div>
                </div>
                <!-- <div class="card  ">
                  <div class="card-header  bg-dark " id="Headdd">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#Kolapspp" aria-expanded="true" aria-controls="Kolapspp">
                        Bekerja
                      </button>
                    </h2>
                  </div>

                  <div id="Kolapspp" class="collapse" aria-labelledby="Headdd" data-parent="#contoHAccordion">
                    <div class="card-body">

                      <small class="d-block text-center   mb-3"><a href="<?= base_url('/admin/LBekerja') ?>">Buat & Lihat Pertanyaan</a></small>
                    </div>
                  </div>
                </div>
                <div class="card  ">
                  <div class="card-header  bg-dark " id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Wirausaha
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#contoHAccordion">
                    <div class="card-body  ">

                      <small class="d-block text-center"><a href="<?= base_url('/admin/Lwirausaha') ?>">Buat & Lihat Pertanyaan</a></small>
                    </div>
                  </div>
                </div>
                <div class="card ">
                  <div class="card-header  bg-dark " id="threeHEad">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#featuring" aria-expanded="true" aria-controls="featuring">
                        Lainnya
                      </button>
                    </h2>
                  </div>

                  <div id="featuring" class="collapse" aria-labelledby="threeHEad" data-parent="#contoHAccordion">
                    <div class="card-body">

                      <small class="d-block text-center mb-3 "><a href="<?= base_url('/admin/DaftarLainnya') ?>">Buat & Lihat Pertanyaan</a></small>
                    </div>
                  </div>
                </div> -->
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto text-center col-lg-10 px-md-4">
        <h1 class="mt-5 mb-4">Hasil Kuesioner</h1>

        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td>
                    Kuis
                  </td>
                  <th>
                    Sangat Baik
                  </th>
                  <th>
                    Baik
                  </th>
                  <th>
                    Cukup
                  </th>
                  <th>
                    Kurang
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <th>
                    <?php foreach ($kuis as $kuis) : ?>
                  <p class="text-center">

                    <?= $kuis['pertanyaan']; ?>
                  </p>     
                     <hr>
                      <?php endforeach; ?>
                    </th>

                  <td>
                     <?= $h1_sangat_baik; ?>  <hr>
                    <?= $h2_sangat_baik; ?>  <hr>
                    <?= $h3_sangat_baik; ?>  <hr>
                    <?= $h4_sangat_baik; ?>  <hr>
                    <?= $h5_sangat_baik; ?>  <hr>
                    <?= $h6_sangat_baik; ?>  <hr>
                    <?= $h7_sangat_baik; ?>  <hr>
                    <?= $h8_sangat_baik; ?>  <hr>
                    <?= $h9_sangat_baik; ?>  <hr>
                    <?= $h10_sangat_baik; ?>  <hr>
                    <?= $h11_sangat_baik; ?>  <hr>
                    
                    <?= $h12_sangat_baik; ?>  <hr>
                    <?= $h13_sangat_baik; ?>  <hr>
                    <?= $h14_sangat_baik; ?>  <hr>
                    <?= $h15_sangat_baik; ?>
                    <hr>
                  </td>
                  <td>
                    <?= $h1_baik; ?>  <hr>
                    <?= $h2_baik; ?>  <hr>
                    <?= $h3_baik; ?>  <hr>
                    <?= $h4_baik; ?>  <hr>
                    <?= $h5_baik; ?>  <hr>
                    <?= $h6_baik; ?>  <hr>
                    <?= $h7_baik; ?>  <hr>
                    <?= $h8_baik; ?>  <hr>
                    <?= $h9_baik; ?>  <hr>
                    <?= $h10_baik; ?>  <hr>
                    
                    <?= $h11_baik; ?>  <hr>
                    <?= $h12_baik; ?>  <hr>
                    <?= $h13_baik; ?>  <hr>
                    <?= $h14_baik; ?>  <hr>
                    <?= $h15_baik; ?>
                    <hr>
                  </td>
                  <td>
                     <?= $h1_cukup; ?>  <hr>
                    <?= $h2_cukup; ?>  <hr>
                    <?= $h3_cukup; ?>  <hr>
                    <?= $h4_cukup; ?>  <hr>
                    <?= $h5_cukup; ?>  <hr>
                    <?= $h6_cukup; ?>  <hr>
                    <?= $h7_cukup; ?>  <hr>
                    <?= $h8_cukup; ?>  <hr>
                    <?= $h9_cukup; ?>  <hr>
                    <?= $h10_cukup; ?>  <hr>
                    <?= $h11_cukup; ?>  <hr>
                    
                    <?= $h12_cukup; ?>  <hr>
                    <?= $h13_cukup; ?>  <hr>
                    <?= $h14_cukup; ?>  <hr>
                    <?= $h15_cukup; ?>
                    <hr>
                  </td>
                  <td>
                    <?= $h1_kurang; ?>  <hr>
                    <?= $h2_kurang; ?>  <hr>
                    <?= $h3_kurang; ?>  <hr>
                    <?= $h4_kurang; ?>  <hr>
                    <?= $h5_kurang; ?>  <hr>
                    <?= $h6_kurang; ?>  <hr>
                    <?= $h7_kurang; ?>  <hr>
                    <?= $h8_kurang; ?>  <hr>
                    <?= $h9_kurang; ?>  <hr>
                    <?= $h10_kurang; ?>  <hr>
                    <?= $h11_kurang; ?>  <hr>
                    <?= $h12_kurang; ?>  <hr>
                    <?= $h13_kurang; ?>  <hr>
                    <?= $h14_kurang; ?>  <hr>
                    <?= $h15_kurang; ?>
                    <hr>
                  </td>
                </tr>

                <td> </td>
                <td>total</td>
                <td>total</td>
                <td>total</td>
                <td>total</td>


              </tbody>



            </table>
          </div>
        </div>
    </div>
    </main>



    <script src="dashboard.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

  <script src="<?= base_url('js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('js/jquery.js') ?>"></script>
</body>

</html>
<!-- https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#1-bar-chart -->