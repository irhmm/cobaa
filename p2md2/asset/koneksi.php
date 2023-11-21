<?php
$host     = 'localhost';
$user     = 'root'; // Ganti dengan username MySQL Anda
$password = '';     // Ganti dengan password MySQL Anda
$db       = 'login'; // Ganti dengan nama database yang Anda gunakan

$Open = mysqli_connect($host, $user, $password, $db);

if (!$Open) {
    die('Koneksi ke database gagal: ' . mysqli_connect_error());
}
?>