<?php
include '..\asset\koneksi.php';

$id = $_POST['id'];

$query = "DELETE FROM kursus WHERE id = $id";
mysqli_query($koneksi, $query);

header("Location: ..\index.php");
exit();
?>
