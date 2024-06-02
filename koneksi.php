<?php

$server = "sql104.infinityfree.com";
$user = "if0_35027990";
$password = "vJOFCkOFYdyW";
$nama_database = "if0_35027990_digicore";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>