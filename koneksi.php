<?php
// Konfigurasi database
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bemkbmipi";

// Koneksi ke database
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}