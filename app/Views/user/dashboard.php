<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>
<nav class="navbar navbar-expand-sm bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand btn-dark pr-3 pl-3">Hai <?= session()->get('nama') ?></a>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item mr-4">
                <a class="nav-link btn btn-outline-light shadow mt-1" href="<?= site_url('logout') ?>">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron" style="margin-top:20px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="display-4"><?= esc($title); ?></div>
                    <div class="panel-body mt-3">
                        <p>Saat ini kami sedang mengadakan TRACER STUDY untuk Alumni Universitas Mulia Balikpapan. Tujuan dari penelitian ini adalah untuk meningkatkan daya saing lulusan kita. Melalui tracer study ini akan dibuat peta daya saing lulusan untuk memperbaiki sistem monitoring lulusan yang ada.</p>
                        <p>Sehubungan dengan itu, kami mohon kesediaan anda untuk meluangkan waktu untuk mengisi dan menjawab pertanyaan-pertanyaan dalam survei ini. Data yang diberikan dalam survei ini akan dijaga kerahasiaannya. Terima kasih atas kerja sama dan dukungan anda .</p>
                    </div>
                    <a href="<?= base_url('/user/answer') ?>" class="btn btn-primary ">Isi Kuesioner</a>
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