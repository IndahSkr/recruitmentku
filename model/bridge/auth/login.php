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

    if ($word == "login") {
        $uname = $_POST['iptUname'];
        $pw = $_POST['iptPw'];

        $dt = array(
            "code" => "login",
            "uname" => $uname,
            "pw" => $pw
        );

        $dtjson = json_encode($dt);
        $send = curlpost($url, $dtjson);
        $result = json_decode($send, TRUE);
        $stat = $result['status'];
        // $hasil = $result['hasil'];
        // print_r($result);

        if ($stat == "200") {
            $hasil = $result['hasil'];
            $_SESSION['upkey'] = $uname . "/" . $pw;
    ?>
            <script>
                Swal.fire({
                    title: 'Sukses',
                    text: '<?php echo $result['pesan'] ?>',
                    icon: 'success',
                    timer: 1500,
                    timerProgressBar: true
                }).then(function() {
                    window.location.href = '../../../view/menu/dashboard/'
                })
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    title: 'Gagal',
                    text: '<?php echo $result['pesan'] ?>',
                    text: 'Silahkan coba lagi',
                    icon: 'error',
                    timer: 1500,
                    timerProgressBar: true
                }).then(function() {
                    window.location = '../../../view/auth/'
                })
            </script>
    <?php
        }
    }
    ?>
</body>

</html>