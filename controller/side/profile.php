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

        $sql1 = "SELECT idprofile, ssn, dtbirth, birthplc, detailAddress, idvillage, iddistrict, idprovince, intro, idjnsform, photo FROM tbprofile WHERE iduser=?";
        
        $query = $conn->prepare($sql1);
        $query->bind_param("s", $iduser);
        $query->bind_result($idprofile, $ssn, $dtbirth, $birthplc, $detailAddress, $idvillage, $iddistrict, $idprovince, $intro, $idjnsform, $photo);
        $query->execute();
        $query->store_result();
        $result = $query->num_rows;

        if ($result == 1) {
            $dt = array();
            while ($row = $query->fetch()) {
                $dt = array(
                    "idprofile" => $idprofile,
                    "ssn" => $ssn,
                    "dtbirth" => $dtbirth,
                    "birthplc" => $birthplc,
                    "address" => $detailAddress,
                    "idvillage" => $idvillage,
                    "iddistrict" => $iddistrict,
                    "idprovince" => $idprovince,
                    "intro" => $intro,
                    "idjnsform" => $idjnsform,
                    "photo" => $photo
                );
            }

            $data = array(
                "status" => 200,
                "pesan" => "Sukses",
                "hasil" => $dt
            );
            
        } else {
            $data = array(
                "status" => 204,
                "pesan" => "Tidak ada data"
            );
        }
    } elseif ($code == "userById") {
        $idusr = $dtpos['id'];

        $sql1 = "SELECT nmlkp, uname, email, wa, pw FROM tbuser WHERE iduser=?";

        $query1 = $conn->prepare($sql1);
        $query1->bind_param("s", $idusr);
        $query1->bind_result($nmlkp, $uname, $email, $wa, $pass);
        $query1->execute();

        $query1->store_result();
        $result1 = $query1->num_rows;

        if ($result1 == 1) {
            $dt = array();
            while ($row = $query1->fetch()) {
                $dt = array(
                    "nmlkp" => $nmlkp,
                    "uname" => $uname,
                    "email" => $email,
                    "wa" => $wa,
                    "pw" => $pass
                );
            }

            $data = array(
                "status" => 200,
                "pesan" => "Sukses",
                "hasil" => $dt
            );
        } else {
            $data = array(
                "status" => 204,
                "pesan" => "Tidak ada data"
            );
        }
    } elseif ($code == "jnsForm") {
        $sql = "SELECT idjnsform, jnsform FROM tbjnsform";
        $query = $conn->prepare($sql);
        $query->bind_result($id, $name);
        $query->execute();
        $query->store_result();
        if ($query->num_rows > 0) {
            $dt = array();
            while ($row = $query->fetch()) {
                array_push(
                    $dt,
                    array(
                        "id" => $id,
                        "name" => $name
                    )
                );
            }
            $data = array(
                "status" => 200,
                "pesan" => $dt
            );
        } else {
            $data = array(
                "status" => 200,
                "pesan" => "Tidak ada data",
            );
        }
    } elseif ($code == "insProfile") {
        $iduser = $dtpos['iduser'];
        $ssn = $dtpos['ssn'];
        $dtbirth = $dtpos['dtbirth'];
        $birthplc = $dtpos['birthplc'];
        $address = $dtpos['address'];
        $idvillage = $dtpos['idvillage'];
        $iddistrict = $dtpos['iddistrict'];
        $idprovince = $dtpos['idprovince'];
        $intro = $dtpos['intro'];
        $idjnsform = $dtpos['idjnsform'];

        $sql = "INSERT INTO tbprofile(idprofile, iduser, ssn, dtbirth, birthplc, detailAddress, idvillage, iddistrict, idprovince, intro, idjnsform) 
                VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $query = $conn->prepare($sql);
        $query->bind_param("ssssssssss", $iduser, $ssn, $dtbirth, $birthplc, $address, $idvillage, $iddistrict, $idprovince, $intro, $idjnsform);
        if ($query->execute()) {
            $data = array(
                "status" => 200,
                "pesan" => "Sukses",
            );
        } else {
            $data = array(
                "status" => 403,
                "pesan" => "Forbidden"
            );
        }
    } elseif ($code == "updIntro") {
        $id = $dtpos['id'];
        $intro = $dtpos['intro'];

        $sql = "UPDATE tbprofile SET intro=? where iduser=?";

        $query = $conn->prepare($sql);
        $query->bind_param("ss", $intro, $id);
        $query->execute();

        if ($query->execute()) {
            $data = array(
                "status" => 200,
                "pesan" => "Sukses",
            );
        } else {
            $data = array(
                "status" => 403,
                "pesan" => "Forbidden"
            );
        }
    } elseif ($code == "jnsformId") {
        $id = $dtpos['id'];

        $sql = "SELECT jnsform FROM tbjnsform where idjnsform=?";
        $query = $conn->prepare($sql);
        $query->bind_param("s", $id);
        $query->bind_result($jnsform);
        $query->execute();
        $query->store_result();

        if ($query->num_rows == 1) {
            $dt = array();
            while ($row = $query->fetch()) {
                // array_push($dt, array(
                //     "name" => $jnsform
                // ));
                $dt = array(
                    "name" => $jnsform
                );
            }

            $data = array(
                "status" => 200,
                "pesan" => "Sukses",
                "hasil" => $dt
            );
        } else {
            $data = array(
                "status" => 204,
                "pesan" => "Tidak ada data"
            );
        }
    } elseif ($code == "updDetails") {
        $id = $dtpos['id'];
        $ssn = $dtpos['ssn'];
        $plc = $dtpos['plc'];
        $dte = $dtpos['dte'];
        $idform = $dtpos['idform'];

        $sql = "UPDATE tbprofile set ssn=?, dtbirth=?, birthplc=?, idjnsform=? where iduser=?";

        $query = $conn->prepare($sql);
        $query->bind_param("sssss", $ssn, $dte, $plc, $idform, $id);
        $query->execute();

        if ($query->execute()) {
            $data = array(
                "status" => 200,
                "pesan" => "Sukses",
            );
        } else {
            $data = array(
                "status" => 403,
                "pesan" => "Forbidden"
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