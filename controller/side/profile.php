<?php
include "conn.php";

$dtpos = json_decode(file_get_contents('php://input'), true);
$code = $dtpos['code'];

$key = explode("/", $dtpos['key']);
$uname = $key[0];
$password = $key[1];

$sql = "SELECT pw FROM tbuser where uname=?";

$query = $conn->prepare($sql);
$query->bind_param("s", $uname);
$query->bind_result($pw);
$query->execute();
$dt = array();

while ($row = $query->fetch()) {
    $dt = array(
        "pw" => $pw
    );
}

if (password_verify($password, $dt['pw'])) {

    if ($code == "profileById") {
        $iduser = $dtpos['id'];
        
        $sql1 = "SELECT idprofile, ssn, dtbirth, birthplc, address, idvillage, iddistrict, idprovince, intro, idjnsform, idlegalitas, photo FROM tbprofile WHERE iduser=?";
        
        $query = $conn->prepare($sql1);
        $query->bind_param("s", $iduser);
        $query->bind_result($idprofile, $ssn, $dtbirth, $birthplc, $address, $idvillage, $iddistrict, $idprovince, $intro, $idjnsform, $idlegalitas, $photo);
        $query->execute();
        $query->store_result();
        $result = $query->num_rows;

        if ($result == 1) {
            $data = array(
                "idprofile" => $idprofile,
                "ssn" => $ssn,
                "dtbirth" => $dtbirth,
                "birthplc" => $birthplc,
                "address" => $address,
                "idvillage" => $idvillage,
                "iddistrict" => $iddistrict,
                "idprovince" => $idprovince,
                "intro" => $intro,
                "idjnsform" => $idjnsform,
                "idlegalitas" => $idlegalitas,
                "photo" => $photo
            );
        } else {
            $data = array(
                "status" => 204,
                "pesan" => "Tidak ada data"
            );
        }
    } elseif ($code == "userById") {
        $iduser = $dtpos['id'];

        $sql1 = "SELECT nmlkp, uname, email, wa, pw FROM tbuser WHERE iduser=?";

        $query = $conn->prepare($sql1);
        $query->bind_param("s", $iduser);
        $query->bind_result($nmlkp, $uname, $email, $wa, $pw);
        $query->execute();

        $query->store_result();
        $result = $query->num_rows;

        if ($result == 1) {
            $data = array(
                "nmlkp" => $nmlkp,
                "uname" => $uname,
                "email" => $email,
                "wa" => $wa,
                "pw" => $pw
            );
        } else {
            $data = array(
                "status" => 204,
                "pesan" => "Tidak ada data"
            );
        }
    }
} else {
    $data = array(
        "status" => 401,
        "pesan" => "Gagal authentikasi data",
    );
}

$conn = null;
echo json_encode($data);

?>