<?php
include "conn.php";
// include_once './connection.php';
$dtpos = json_decode(file_get_contents('php://input'), true);
$code = $dtpos['code'];

if ($code == "login") {
    $uname = $dtpos['uname'];
    $pass = $dtpos['pw'];
    $sql = "";
} elseif ($code == "regist") {
    $nmlkp = $dtpos['nmlkp'];
    $uname = $dtpos['uname'];
    $pw = $dtpos['pw'];
    $email = $dtpos['email'];
    $wa = $dtpos['wa'];
    $idlevel = $dtpos['idlevel'];

    $sql = "INSERT INTO tbuser (iduser, nmlkp, uname, pw, email, wa, idlevel) VALUES (null, ?, ?, ?, ?, ?, ?)";
    $query = $conn->prepare($sql);
    $query->bind_param("ssssss", $nmlkp, $uname, $pw, $email, $wa, $idlevel);

    if ($query->execute()) {
        $data = array(
            "status" => 1,
            "pesan" => "Berhasil Menyimpan"
        );
    } else {
        $data = array(
            "status" => 0,
            "pesan" => "Gagal Menyimpan"
        );
    }
}

$conn = null;
echo json_encode($data);
