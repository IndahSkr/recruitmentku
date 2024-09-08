<?php
include "conn.php";
// include_once './connection.php';
$dtpos = json_decode(file_get_contents('php://input'), true);
$code = $dtpos['code'];

if ($code == "login") {
    $uname = $dtpos['uname'];
    $pass = $dtpos['pw'];

    $sql = "SELECT pw, nmlkp, idlevel FROM tbuser WHERE uname=?";

    $query = $conn->prepare($sql);
    $query->bind_param("s", $uname);
    $query->bind_result($pw, $nmlkp, $idlevel);
    $query->execute();

    // $query->store_result();
    // $result = $query->num_rows;

    $data = array(
        "hasil" => $query[1]
    );

    // if ($result == 1) {
    //     $dt = array();
    //     while ($row = $query->fetch()) {
    //         $dt = array(
    //             "password" => $pw,
    //             "nama" => $nmlkp,
    //             "idlevel" => $idlevel
    //         );
    //     }

    //     $data = array(
    //         "status" => 200,
    //         "pesan" => "Username Ditemukan",
    //         "hasil" => $dt
    //     );
    // } else {
    //     $data = array(
    //         "status" => 204,
    //         "pesan" => "Password atau Username Salah"
    //     );
    // }
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
            "status" => 200,
            "pesan" => "Berhasil Menyimpan"
        );
    } else {
        $data = array(
            "status" => 204,
            "pesan" => "Gagal Menyimpan"
        );
    }
}

$conn = null;
echo json_encode($data);
