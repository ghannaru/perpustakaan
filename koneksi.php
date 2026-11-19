<?php
// Gendhis Yuwita Sari - 250202014 - TI 2A
mysqli_report(MYSQLI_REPORT_OFF);

// Parameter koneksi
$host = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan_pwd";

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . htmlspecialchars(mysqli_connect_error()));
}

// Mengatur karakter agar huruf dan simbol tersimpan dengan benar
mysqli_set_charset($koneksi, "utf8mb4");