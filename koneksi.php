<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "KSI2025"; // sesuaikan dengan nama database kamu

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
