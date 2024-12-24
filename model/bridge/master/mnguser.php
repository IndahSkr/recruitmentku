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

    if ($word == "tmbUser") {
        $nmlkp = $_POST['iptNmlkp'];
        $uname = $_POST['iptuname'];
        $pw = password_hash($_POST['iptpw'], PASSWORD_DEFAULT);
        $email = $_POST['iptEmail'];
        $wa = $_POST['iptWa'];
        $idlevel = $_POST['iptLv'];

        $dt = array(
            "code" => "regist",
            "nmlkp" => $nmlkp,
            "uname" => $uname,
            "pw" => $pw,
            "email" => $email,
            "wa" => $wa,
            "idlevel" => $idlevel,
            "isActive" => "1"
        );

        $dtjson = json_encode($dt);
        $send = curlpost($url, $dtjson);
        $result = json_decode($send, TRUE);
        $hasil = $result['status'];
        // print_r($result);

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
                    window.location.href = '../../../view/menu/master/mnguser.php'
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
                    window.location = '../../../view/menu/master/mnguser.php'
                })
            </script>
        <?php
        }
        ?>
        <script>
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            })
        </script>
    <?php
    }
    ?>
</body>

</html>