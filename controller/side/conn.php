<?php
$dbhost = "localhost";
$dbuname = "root";
$dbpw = "";
$dbname = "recruitment";

$conn = mysqli_connect($dbhost, $dbuname, $dbpw, $dbname);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
