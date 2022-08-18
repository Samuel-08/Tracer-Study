<?=$this->extend("layouts/app")?>

<?=$this->section("body")?>
<div class="container" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading">Editor Dashboard</div>
        <div class="panel-body">
          <h1>Hello, <?=session()->get('name')?></h1>
          <h3><a href="<?=site_url('logout')?>">Logout</a></h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <?php if (isset($validation)) {?>
    <div class="alert alert-danger" role="alert">
      <?php echo $validation->listErrors() ?>
    </div>
  <?php }?>
  <form action="<?php echo base_url('user/store') ?>" method="POST">
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">nim</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">nama</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">status</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">email</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">password</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">no_hp</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">jurusan</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">tahun_lulus</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">kota_kelahiran</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">tgl_lahir</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">alamat</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">agama</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">jenis_kelamin</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">foto</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">avatar</label>
      <div class="col-sm-10">
        <input type="text" readonly disabled class="form-control " id="staticEmail">
      </div>
    </div> <button type="submit" class="btn btn-primary">SIMPAN</button>
    <a href="<?php echo base_url('user') ?>
  " class="btn btn-info d-inline">Kembali</a>
  </form>
</div>
<!-- End Modal Edit Product-->


<?=$this->endSection()?>