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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap');

        *,
        html,
        body {
            font-family: 'Poppins', sans-serif;
        }

        .kart {
            width: 18rem;
            height: 15rem;
        }

        .background {
            background-color: hsla(120, 100%, 50%, 0.3);
        }

        .parallax {
            /* The image used */
            background-image:
                url("/img/slide-UM-001.jpg");

            /* Set a specific height */
            min-height: 570px;
            width: 100%;
            height: 100%;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;

        }
    </style>
    <!-- Custom styles for this template -->

    <link href="<?= base_url('/css/dashboard.css'); ?>" rel="stylesheet">

</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light py-3 bg-light shadow-lg">
        <div class="container">
            <h4 class="display-5 mr-5 " href="#">
                <strong>Universitas Mulia</strong>
            </h4>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button class="navbar-toggler mr-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <a href="<?= base_url('login') ?>" class="my-1 mx-1 btn  btn-outline-primary  ">Login</a>
                <a href="<?= base_url('register') ?>" class="my-1 mx-1 btn btn-outline-danger">Daftar</a>
            </form>
        </div>
    </nav>

    <div class="jumbotron-fluid">
        <div class="rounded parallax">
            <div class="card-img-overlay vertical-center    mt-n5 ">
            </div>
        </div>
    </div>

    <div class="jumbotron-fluid ">

        <div class="container shadow-sm p-5 mt-5 ">
            <h2 class="display-3"><strong>Selamat Datang</strong></h2>
            <p class="card-text font-weight-thin">Bagi Alumni Universitas Mulia program Sarjana,
                Profesi, dan Pascasarjana. <br>
                yuk siapkan diri untuk mengisi Kuesioner tracer study.</p>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container my-5">

                    <h4 class="display-5">Berita Saat Ini</h4>
                    <div class="card-deck">
                        <div class="card">
                            <img src="<?= base_url('img\universitas-mulia-balikpapan-rayakan-dies-natalis-ke-2-tahun.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Rektor Dorong Dosen Asah Keterampilan Multimedia untuk Mendukung Pembelajaran Daring</p>
                                <p class="card-text"><small class="text-muted">12 MARET 2022</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('img\universitas-mulia-balikpapan-rayakan-dies-natalis-ke-2-tahun.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">PSDKU Universitas Mulia Samarinda Buka Workshop Komputer untuk Siswa SLTA</p>
                                <p class="card-text"><small class="text-muted">28 FEBRUARI 2022</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('img\universitas-mulia-balikpapan-rayakan-dies-natalis-ke-2-tahun.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Terapkan Kampus Merdeka, Universitas Mulia Kirim Mahasiswa Ikuti Program PMM 2022</p>
                                <p class="card-text"><small class="text-muted">28 JULI 2022</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="container my-5">

                    <h4 class="display-5">Berita Saat Ini</h4>
                    <div class="card-deck">
                        <div class="card">
                            <img src="<?= base_url('img\universitas-mulia-balikpapan-rayakan-dies-natalis-ke-2-tahun.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Bimtek Pengisian BKD Berbasis SISTER di PSDKU Samarinda</p>
                                <p class="card-text"><small class="text-muted">29 MARET 2022</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('img\universitas-mulia-balikpapan-rayakan-dies-natalis-ke-2-tahun.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Rapat Monitoring dan Evaluasi Kinerja Tengah Tahunan 2022</p>
                                <p class="card-text"><small class="text-muted"> 19 JULI 2022</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('img\universitas-mulia-balikpapan-rayakan-dies-natalis-ke-2-tahun.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Selamat! Mahasiswa Informatika dan Sistem Informasi Juara Pekan Kreativitas Pemuda Kota Balikpapan 2022</p>
                                <p class="card-text"><small class="text-muted">2 AGUSTUS 2022</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="container my-5">

                    <h4 class="display-5">Berita Saat Ini</h4>
                    <div class="card-deck">
                        <div class="card">
                            <img src="<?= base_url('img\universitas-mulia-balikpapan-rayakan-dies-natalis-ke-2-tahun.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Dosen Universitas Mulia Menjadi Ketua Sidang dalam Konferensi Internasional CISCON 2022</p>
                                <p class="card-text"><small class="text-muted">18 JULI 2022</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('img\universitas-mulia-balikpapan-rayakan-dies-natalis-ke-2-tahun.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Universitas Mulia Jalin Kerja Sama dengan Pengadilan Negeri Kelas 1A Balikpapan</p>
                                <p class="card-text"><small class="text-muted">7 JULI 2022</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('img\universitas-mulia-balikpapan-rayakan-dies-natalis-ke-2-tahun.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Universitas Mulia Sepakati MoA dengan UNIMAS dan UMS di Kuching Sarawak Malaysia</p>
                                <p class="card-text"><small class="text-muted">23 JUNI 2022</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon  btn-secondary rounded-circle p-3" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon  btn-secondary rounded-circle p-3" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>










    <div class="jumbotron bg-dark text-secondary ">
        <div class="container pt-2 mt-3">
            <img src="\img\rektor\rektor-um-dr-mrusli (2).jpg" class="card-img img-fluid shadow rounded mt-4" width="250px" height="550px" srcset="">
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