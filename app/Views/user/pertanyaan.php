<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
   <title>first page</title>
   <link rel="icon" type="image/x-icon" href="<?= base_url('img/Universitas_Mulia.png') ?>">
   <link rel="stylesheet" href="css/bootstrap.css" />
   <link rel="stylesheet" href="css/bootstrap-reboot.css" />
   <link rel="stylesheet" href="css/bootstrap-grid.css" />
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- Custom styles for this template -->

   <link href="<?= base_url('/css/dashboard.css'); ?>" rel="stylesheet">

</head>

<body>
   <div class="container mt-5 px-5">

      <form action="<?= base_url('/user/insert') ?>" method="post">
         <div class="form-group row">
            <input class="form-control" type="hidden" name="id_user" value="<?= session()->get('id') ?>" readonly> 
            <input class="form-control" type="hidden" name="id_kategori" value="<?= session()->get('id') ?>" readonly> 
            <input class="form-control" type="hidden" name="id_kuis" value="<?php foreach ($ss as $as): ?><?= $as['id_kuis_belajar']; ?> <?php endforeach ?>" readonly> 
            <?php foreach ($ss as $pertanyaan => $ss) : ?>
               <label for="inputPassword" class="col-sm-7 col-form-label mb-5"> <?= $ss['pertanyaan']; ?></label>

               <div class="col-sm-5 mb-5">
                  <div class="form-group ">
                     <select class="form-control" id="exampleFormControlSelect1" name="hasil<?= ++$pertanyaan ?>" value="<?= ++$pertanyaan ?>">
                        <?php $no = 0;
                        foreach ($radio as $radios) : { ?>
                              <option value="<?= ++$no ?>"><?= $radios['opsi']; ?></option>
                        <?php  }
                        endforeach ?>
                     </select>
                  </div>
               </div>
            <?php endforeach ?>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
   </script>
   <script src="js/bootstrap.bundle.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.min.js"></script>
  <script src="<?= base_url('js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('js/jquery.js') ?>"></script>
</body>

</html>