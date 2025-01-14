<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../../../assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="../../../assets/vendor/sweetalert2/dist/sweetalert2.min.css">
</head>

<body>
  <?php
  // echo $_POST['iptNmlkp'];
  session_start();
  include "../../url/alamat.php";
  include "../../../assets/vendor/func/curl.php";

  $word = $_GET['word'];

  if ($word == "tmbProfile") {
    $intro = $_POST['tintro'];
    echo $intro;
  }
  ?>
</body>

</html>