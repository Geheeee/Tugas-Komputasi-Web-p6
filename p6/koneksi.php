<?php
$host = "localhost";
$user = "root";
$pass = "";
$namadb = "mahasiswa";
$port = 3307;

$koneksi = mysqli_connect($host, $user, $pass, $namadb, $port);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
