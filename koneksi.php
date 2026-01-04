<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "dbpengumuman";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("❌ Koneksi GAGAL: " . mysqli_connect_error());
}

echo "✅ Koneksi BERHASIL";
