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
  $upkey = $_SESSION['upkey'];
  $uid = $_SESSION['id'];
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

    $dt = array(
      "code" => "insProfile",
      "key" => $upkey,
      "iduser" => $uid,
      "ssn" => $ssn,
      "dtbirth" => $dtbirth,
      "birthplc" => $birthplc,
      "address" => $address,
      "idvillage" => $village,
      "iddistrict" => $dist,
      "idprovince" => $prov,
      "intro" => $intro,
      "idjnsform" => $formation,
    );

    $dtjson = json_encode($dt);
    $send = curlpost($url2, $dtjson);
    $result = json_decode($send, TRUE);
    $hasil = $result['status'];

    if ($hasil == 200) {
  ?>
      <script>
        Swal.fire({
          title: 'Sukses',
          text: 'Data Berhasil Disimpan',
          icon: 'success',
          timer: 1500,
          timerProgressBar: true
        }).then(function() {
          window.location.href = '../../../view/menu/profile/'
        })
      </script>
    <?php
    } else {
    ?>
      <script>
        Swal.fire({
          title: 'Gagal',
          text: 'Data Gagal Disimpan',
          text: 'Silahkan coba lagi',
          icon: 'error',
          timer: 1500,
          timerProgressBar: true
        }).then(function() {
          window.location = '../../../view/menu/profile/'
        })
      </script>
    <?php
    }
  } elseif ($word == "updIntro") {
    $intro = $_POST['edIntro'];
    $id = $_POST['idIntro'];

    $dt = array(
      "code" => "updIntro",
      "key" => $upkey,
      "id" => $id,
      "intro" => $intro
    );

    $dtjson = json_encode($dt);
    $send = curlpost($url2, $dtjson);
    $result = json_decode($send, TRUE);
    $hasil = $result['status'];

    if ($hasil == 200) {
    ?>
      <script>
        Swal.fire({
          title: 'Sukses',
          text: 'Data Berhasil Disimpan',
          icon: 'success',
          timer: 1500,
          timerProgressBar: true
        }).then(function() {
          window.location.href = '../../../view/menu/profile/'
        })
      </script>
    <?php
    } else {
    ?>
      <script>
        Swal.fire({
          title: 'Gagal',
          text: 'Data Gagal Disimpan',
          text: 'Silahkan coba lagi',
          icon: 'error',
          timer: 1500,
          timerProgressBar: true
        }).then(function() {
          window.location = '../../../view/menu/profile/'
        })
      </script>
  <?php
    }
  }
  ?>
  <!-- <h1>hello</h1> -->
</body>

</html>