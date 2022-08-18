<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Admin Dashboard</title>
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
                                  
                                   Dashboard
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link " href="<?= base_url('admin/list')  ?>">
                                  
                                      List Alumni 
                                  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= base_url('/admin/Hasil') ?>">
                                  
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

                                          <div id="kollasps" class="collapse show" aria-labelledby="Headers" data-parent="#contoHAccordion">
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

                                          <div id="Kolapspp"  class="collapse"  aria-labelledby="Headdd" data-parent="#contoHAccordion">
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
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 mb-3 ">
                    <h2 class="ml-5 pl-2">Silahkan Input Pertanyaan Anda</h2>
                    <a href="/admin" class="btn btn-danger">Kembali</a>
                </div>
                <form action="<?= base_url('admin/Cbelajar') ?>" method="POST">
                    <?= csrf_field(); ?>
                    <?php if (session()->getFlashData('sukses')) : ?>
                        <!-- notif hapus data -->
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <meta http-equiv="refresh" content="1;">
                            <?= session()->getFlashData('sukses')  ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashData('success')) : ?>
                        <!-- notif tambah data -->
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?= session()->getFlashData('success')  ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashData('ubah')) : ?>
                        <!-- notif ubah kuis -->
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <meta http-equiv="refresh" content="2;">
                            <?= session()->getFlashData('ubah')  ?>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-center">



                                <div class="form-group disabled" hidden readonly>
                                    <label for="pertanyaan" hidden>hidden</label>
                                    <input type="text" hidden readonly class="form-control disabled " name="pertanyaan" id="pertanyaan" name="id_hasil">
                                </div>
                                <!-- <div class="col">
                                    <div class="form-group">
                                        <label for="pertanyaan">Pertanyaan </label>  
                                        <input type="hidden" class="form-control " id="id" name="">
                                        <input type="text" class="form-control " id="pertanyaan" name="pertanyaan">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Submit</button>
                                        <small>
                                            <p>disarankan hanya 10 pertanyaan saja</p>
                                        </small>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                </form>
                <div class="container float-right">
                    <div class="row ml-4">
                        <div class="col ">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center table-striped shadow">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Pertanyaan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($ss as $isi) { ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $isi['pertanyaan']; ?></td>
                                                    <td class="mx-auto px-auto text-center"><a href="/admin/edit/<?= $isi['id_kuis_belajar']; ?>" class="btn btn-outline-primary"><i class="bi bi-pen"> </i></a>
                                                        <!-- <a href="/admin/delete/<?= $isi['id_kuis_belajar']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash3" onclick="alert('Pertanyaan akan di hapus secara permanen');"> </i></a> -->
                                                    </td>
                                                </tr>
                                            <?php $no++;
                                            } ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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