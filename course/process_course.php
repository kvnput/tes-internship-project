<?php
include '..\asset\koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$durasi = $_POST['durasi'];

$query = "INSERT INTO kursus (judul, deskripsi, durasi) VALUES ('$judul', '$deskripsi', '$durasi')";
mysqli_query($koneksi, $query);

header("Location: ..\index.php");
exit();
?>
