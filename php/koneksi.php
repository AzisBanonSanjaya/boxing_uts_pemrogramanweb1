<?php
$server = "localhost";
$user = "root";
$pasword = "";
$database = "pendaftaranboxing";
$koneksi = mysqli_connect($server, $user, $pasword, $database);
if (!$koneksi) {
    die("koneksi gagal" . mysqli_connect_error());
} 
   
?>