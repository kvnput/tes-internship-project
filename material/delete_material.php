<?php
include '..\asset\koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM materi WHERE id = $id";
mysqli_query($koneksi, $query);

header("Location: ..\index.php");
exit();
?>
