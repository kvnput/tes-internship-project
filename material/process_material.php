<?php
include '..\asset\koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$link_embed = $_POST['link_embed'];

$query = "INSERT INTO materi (judul, deskripsi, link_embed) VALUES ('$judul', '$deskripsi', '$link_embed')";
mysqli_query($koneksi, $query);

header("Location: ..\index.php");
exit();
?>
