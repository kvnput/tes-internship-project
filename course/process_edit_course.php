<?php
include '..\asset\koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$durasi = $_POST['durasi'];

$query = "UPDATE kursus SET judul = '$judul', deskripsi = '$deskripsi', durasi = '$durasi' WHERE id = $id";
mysqli_query($koneksi, $query);

header("Location: ..\index.php");

exit();
?>
