<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>
<nav class="navbar navbar-expand-sm bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand text-muted px-2">Hai <?= session()->get('nama') ?></a>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item mr-4">
                <a class="nav-link btn btn-dark shadow mt-1" href="<?= site_url('logout') ?>">Logout</a>
            </li>

        </ul>
    </div>
</nav>
<div class="jumbotron" style="margin-top:20px;">
    <div class="container">

        <?php if (session()->getFlashData('sukses')) : ?>
            <!-- notif ubah kuis -->
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <meta http-equiv="refresh" content="2;">
                <?= session()->getFlashData('sukses')  ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="display-4 mb-3 pr-5"><?php echo $tittle; ?></div>
                    <div class="panel-body">
                        <p>Terimakasih Telah Mengisi Kuesioner</p>
                    </div>
                    <a href="<?= site_url('logout') ?>" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center ">Langkah - Langkah Pengisian Kuesioner</h2>
            <div class="card-body ">
                <blockquote class="blockquote mb-0 text-center">
                    <small>
                        <p class="text-secondary">
                            Diharapkan Kuesioner hanya di isi sekali saja <br>demi menjaga keakuratan data yang telah anda isi</p>
                    </small>
                </blockquote>
            </div>

            <div class="d-flex justify-content-between">
                <div class="card shadow-sm rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class=" text-center card-title">Langkah 1</h5>
                        <hr>
                        <p class="card-text">Masuk kedalam halaman website Tracer Study Alumni Universitas Mulia Balikpapan</p>
                    </div>
                </div>
                <div class="card shadow-sm rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class=" text-center card-title">Langkah 2</h5>
                        <hr>
                        <p class="card-text">Jika telah memiliki akun, silahkan isi form login. Jika belum memiliki akun, silahkan mendaftar terlebih dahulu</p>
                    </div>
                </div>
                <div class="card shadow-sm rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class=" text-center card-title">Langkah 3</h5>
                        <hr>
                        <p class="card-text">Cari tombol <a class="btn btn-sm btn-primary">Isi Kuesioner</a>
                        </p> kemudian tekan

                    </div>
                </div>
            </div>
        </div>
        <div class="col my-4">
            <div class="d-flex justify-content-between">
                <div class="card shadow-sm rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class=" text-center card-title">Langkah 4</h5>
                        <hr>
                        <p class="card-text">Halaman kuesioner otomatis tampil </p>
                    </div>
                </div>
                <div class="card shadow-sm rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class=" text-center card-title">Langkah 5</h5>
                        <hr>
                        <p class="card-text">Jawablah Kuesioner dengan sebenar-benarnya</p>
                    </div>
                </div>
                <div class="card shadow-sm rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class=" text-center card-title">Langkah 6</h5>
                        <hr>
                        <p class="card-text">Setelah melakukan pengisian form, silahkan submit jawaban anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>