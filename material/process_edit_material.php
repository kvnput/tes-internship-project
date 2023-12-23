<?php
include '..\asset\koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$link_embed = $_POST['link_embed'];

$query = "UPDATE materi SET judul = '$judul', deskripsi = '$deskripsi', link_embed = '$link_embed' WHERE id = $id";
mysqli_query($koneksi, $query);

header("Location: ..\index.php");
exit();
?>
