<?php
include "conn.php";
// include_once './connection.php';
$dtpos = json_decode(file_get_contents('php://input'), true);
$code = $dtpos['code'];

$key = explode("/", $dtpos['key']);
$uname = $key[0];
$password = $key[1];

$data = array(
    "uname" => $uname
);

$conn = null;
echo json_encode($data);
