<?php
header('Content-Type: application/json');
require_once 'koneksi.php';

$response = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nama = mysqli_real_escape_string($conn, $_POST['nama'] ?? '');
  $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
  $pesan = mysqli_real_escape_string($conn, $_POST['pesan'] ?? '');

  $sql = "INSERT INTO pesan_tik (nama, email, pesan) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);

  if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $pesan);
    $sukses = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $response['status'] = $sukses ? "success" : "error";
    $response['message'] = $sukses ? "Pesan berhasil dikirim!" : "Gagal mengirim pesan.";
  } else {
    $response = [
      "status" => "error",
      "message" => "Query tidak bisa diproses: " . mysqli_error($conn)
    ];
  }
  mysqli_close($conn);
} else {
  $response = [
    "status" => "error",
    "message" => "Request tidak valid."
  ];
}

echo json_encode($response);
