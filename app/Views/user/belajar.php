 <?= $this->extend("layouts/app") ?>
 <?= $this->section("body") ?>

 <div class="container mt-5">
    <?php if (session()->getFlashData('sukses')) : ?>
       <!-- notif ubah kuis -->
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <meta http-equiv="refresh" content="2;">
          <?= session()->getFlashData('sukses') ?>
       </div>
    <?php endif; ?>

    <h3 class="text-center mb-3">Form Kuesioner</h3>
<div class="card p-5">
    <form action="<?= base_url('/user/belajar') ?>" method="POST">
       <div class="form-group row">
          <label for="inputStte" class="col-sm-4 col-form-label">Apa yang sedang anda lakukan saat ini</label>
          <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
          <div class="col-sm-8">
             <select id="inputStte" name="kategori" class="form-control">
                <?php foreach ($kategori as $kategori) : ?>
                   <option value="<?= $kategori['kategori']; ?>"><?= $kategori['kategori']; ?></option>
                <?php endforeach ?>
             </select>
          </div>
       </div>
       <div class="form-group col-md-6">
          <input name="id_user" type="hidden" hidden class="form-control" id="inputPassword4" value="<?= $user['id']; ?>">
          <input name="nama" type="hidden" hidden class="form-control" id="putPassword4" value="<?= $user['nama']; ?>">
       </div>
       <?php foreach ($tanya as $t => $tanya) : ?>
          <div class="form-group col-md-6">
             <input name="id_kuis" type="hidden" hidden class="form-control" id="inputPassword4" value="<?= $tanya['id_kuis_belajar']; ?>">
          </div>
          <div class="form-group row">
             <label for="inputEmail3" class="col-sm-4 col-form-label"><?= $tanya['pertanyaan']; ?></label>
             <div class="col-sm-8">
                <select id="inputState" name="hasil<?= ++$t  ?>" class="form-control">
                   <?php foreach ($ss as $s) : ?>
                      <option value="<?= $s['opsi']; ?>"><?= $s['opsi']; ?></option>
                   <?php endforeach ?>
                </select>
             </div>
          </div>
       <?php endforeach ?>
       <div class="d-flex justify-content-center">
          <button type="submit" class="btn mr-3 btn-primary">Submit</button>
          <a href="/user" class="btn btn-danger"> kembali</a>
       </div>
    </form>
 </div>
 </div>
 <?= $this->endSection() ?>