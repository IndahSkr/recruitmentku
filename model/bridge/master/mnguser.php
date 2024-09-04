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
    // session_start();
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
            "idlevel" => $idlevel
        );
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