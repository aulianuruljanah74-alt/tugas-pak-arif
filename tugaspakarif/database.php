<?php
$host = 'localhost';
$user = 'root'; //Default LARAGON adalah root
$pass = '';
$db = 'native';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>