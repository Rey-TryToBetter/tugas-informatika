<?php
$host = "localhost";
$user = "root";
$password = ""; // sesuaikan jika ada
$database = "db_pesan"; // nama database kamu

$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
// } else {
//     echo "Berhasil terhubung ke database";
// }
