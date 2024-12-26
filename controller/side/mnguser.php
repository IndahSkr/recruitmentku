<?php
include "conn.php";
// include_once './connection.php';
$dtpos = json_decode(file_get_contents('php://input'), true);
$code = $dtpos['code'];
// $key = $dtpos['key'];
$key = explode("/", $dtpos['key']);
$uname = $key[0];
$password = $key[1];

// $data = array(
//     "uname" => $uname
// );
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

    if ($code === "allUser") {

        $sql1 = "SELECT iduser, nmlkp, uname, email, wa, idlevel, isActive FROM tbuser";
        $query = $conn->prepare($sql1);
        $query->bind_result($id, $nmlkp, $uname, $email, $wa, $idlevel, $isActive);
        $query->execute();
        $query->store_result();
        $result = $query->num_rows;
        if ($query->num_rows > 0) {
            $dt = array();
            while ($row2 = $query->fetch()) {
                array_push(
                    $dt,
                    array(
                        "iduser" => $id,
                        "nmlkp" => $nmlkp,
                        "uname" => $uname,
                        "email" => $email,
                        "wa" => $wa,
                        "idlevel" => $idlevel,
                        "isActive" => $isActive
                    )
                );
            }

            $data = array(
                "status" => 200,
                "pesan" => $dt,
            );
        } else {
            $data = array(
                "status" => 200,
                "pesan" => "Tidak ada data",
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
