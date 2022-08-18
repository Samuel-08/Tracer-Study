<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container">

   <?php if (!empty(session()->getFlashdata('error'))) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <h4>Periksa Entrian Form</h4>
         </hr />
         <?php echo session()->getFlashdata('error'); ?>
      </div>
   <?php endif; ?>

   <div class="row my-3 d-flex justify-content-center">
      <div class="card px-5 pb-5 shadow">
         <div class="col">
            <div class="panel panel-primary">
               <div class="card-body text-center mt-n3" style="height:270px;">
                  <img src="img\um-3d.png" class="img-card img-fluid" alt="UM" width="300" style="height:250px;">
               </div>
               <div class="panel-body">
                  <?php if (isset($validation)) : ?>
                     <div class="col ">
                        <div class="alert alert-danger" role="alert">
                           <?= $validation->listErrors() ?>
                        </div>
                     </div>
                  <?php endif; ?>
                  <form class="" action="<?= base_url('register') ?>" method="post">
                     <?= csrf_field() ?>
                     <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" autofocus>
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" autocomplete="off">
                     </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" onkeyup="Jchar(this);">
                           <small id="ps" class="text-muted"> <i>Minimal 8 karakter</i></small>
                     </div>
                     <div class="form-group">
                        <label for="password_confirm">Password Konfirmasi</label>
                        <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                     </div>

                     <div class="form-group">
                        <label for="status">Status saat ini</label>
                        <select name="status" class="custom-select" id="status" required>
                           <option selected disabled value="" class="alert-secondary">Pilih</option>
                           <option value="Belajar">Belajar</option>
                           <option value="Bekerja">Bekerja</option>
                           <option value="Wirausaha">Wirausaha</option>
                           <option value="Lainnya">Lainnya</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="jeniskelamin">Jenis kelamin</label>
                        <select name="jenis_kelamin" class="custom-select" id="jeniskelamin" required>
                           <option selected disabled value="" class="alert-secondary">Pilih</option>
                           <option value="Pria">Pria</option>
                           <option value="Perempuan">Perempuan</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="nim">nim</label>
                        <input type="text" class="form-control" name="nim" id="nim" required>
                     </div>
                     <div class="form-group">
                        <label for="no_hp">nomor hp</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                     </div>
                     <div class="form-group">
                        <label for="jurusan">jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" required>
                     </div>
                     <div class="form-group">
                        <label for="tahunlulus">Tahun lulus</label>
                        <input type="month" class="form-control" name="tahun_lulus" id="tahunlulus" required>
                     </div>
                     <div class="form-group">
                        <label for="tgl_lahir">Tanggal lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                     </div>
                     <div class="form-group">
                        <label for="kota_kelahiran">kota kelahiran</label>
                        <input type="text" class="form-control" name="kota_kelahiran" id="kota_kelahiran" required>
                     </div>
                     <div class="form-group">
                        <label for="agama">agama</label>
                        <select name="agama" class="custom-select" id="agama" required>
                           <option selected disabled value="" class="alert-secondary">Pilih</option>
                           <option value="Islam">Islam</option>
                           <option value="Kristen">Kristen</option>
                           <option value="Hindu">Hindu</option>
                           <option value="Budha">Budha</option>
                           <option value="Khatolik">Khatolik</option>
                           <option value="Konghucu">Konghucu</option>
                        </select>
                     </div>


                     <div class="container my-5">
                        <a href="/" class="btn btn-primary px-5 mx-5 mt-1">Kembali</a>
                        <button type="submit" class="btn btn-success px-5 mx-5 mt-1">Daftar</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?= $this->endSection() ?>