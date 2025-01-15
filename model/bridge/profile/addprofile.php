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
    $ssn = $_POST['ssnprofile'];
    $dtbirth = $_POST['dtbirth'];
    $birthplc = $_POST['birthplc'];
    $formation = $_POST['selForm'];
    $address = $_POST['addr'];
    $prov = $_POST['sprovince'];
    $city = $_POST['selCity'];
    $dist = $_POST['selDist'];
    $village = $_POST['selVill'];

    echo $intro;
    echo $ssn;
    echo $dtbirth;
    echo $birthplc;
    echo $formation;
    echo $address;
    echo $prov;
    echo $city;
    echo $dist;
    echo $village;
  }
  ?>
  <!-- <h1>hello</h1> -->
</body>

</html>