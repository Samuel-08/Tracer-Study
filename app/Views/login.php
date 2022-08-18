<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>


<div class="container text-center px-5 mt-5">
  <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <h4>Periksa Entrian Form</h4>
      </hr />
      <?php echo session()->getFlashdata('success'); ?>
    </div>
  <?php endif; ?>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card px-5 pb-5 shadow">
        <form class="form-signin mt-2" action="<?= base_url('login') ?>" method="Post">
          <img class="img-card img-fluid mb-4" src="img\um-3d.png" alt="UM" width="300" height="270">
          <h1 class="h3 mb-3 font-weight-normal">Silakan Masuk</h1>
          <?php if (isset($validation)) : ?>
            <div class="alert alert-danger" role="alert">
              <?= $validation->listErrors() ?>
            </div>
          <?php endif ?>

          <label for="email" class="sr-only">Alamat Email</label>
          <input type="email" id="email" class="form-control shadow-sm mb-3" placeholder="Email" name="email" required autofocus>
          <label for="password" class="sr-only">Password</label>
          <input type="password" id="password" class="form-control shadow-sm mb-3" placeholder="Password" name="password" required>
          <button class="btn btn-lg btn-primary btn-block shadow mb-3" type="submit">Masuk</button>
          <small><a href="register" class="mt-4 text-center">Belum punya akun ?</a></small>
        </form>
        <a href="/" class="btn btn-outline-danger rounded mt-5">Kembali</a>

      </div>
    </div>
  </div>

  <?= $this->endSection() ?>