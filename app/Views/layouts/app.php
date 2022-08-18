<!DOCTYPE html>
<html lang="en">

<head>
  <title>Universitas Mulia</title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('img/Universitas_Mulia.png') ?>">
  <link rel="icon" type="image/x-icon" href="favicon.png" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

  <script>
    function Jchar(obj) {
      var minLength = 8;
      var strLength = obj.value.length;

      if (strLength < minLength) {
        document.getElementById("ps").innerHTML = '<span style="color: red;">' + 'Masih ' + '<b>' + strLength + '</b>' + ' Karakter. ' + '  Anda Belum ' + '  aman</span>';
      } else {
        document.getElementById("ps").innerHTML = '<span style="color: green;">' + 'Sudah ' +
          '<b>' + strLength + '</b>' + ' Karakter.  ' + '  Anda ' + ' sudah aman</span>';
      }
    }

    function characterCount(txt) {
      var strLength = txt.length;

      document.getElementById("result").innerHTML = strLength;
    }

    function SelectRedirect() {
      // ON selection of section this function will work
      // alert(document.getElementById('s1').value);

      switch (document.getElementById('s1').value) {
        case "1":
          window.location = "<?= base_url('/user/answer') ?>";
          break;

        case "2":
          window.location = "<?= base_url('user/bekerja') ?>";
          break;

        case "3":
          window.location = "<?= base_url('user/wirausaha') ?>";
          break;
        case "4":
          window.location = "<?= base_url('user/lainnya') ?> ";
          break;

          /// Can be extended to other different selections of SubCategory //////
        default:
          window.location = "/user"; // if no selection matches then redirected to home page
          break;
      } // end of switch 
    }
  </script>

  <!-- Custom styles for this template -->

  <link href="<?= base_url('/css/dashboard.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->

  <link href="<?= base_url('/css/dashboard.css'); ?>" rel="stylesheet">

</head>

<body>




  <?= $this->renderSection("body") ?>

  <!-- jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  <script src="<?= base_url('js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('js/jquery.js') ?>"></script>
</body>

</html>