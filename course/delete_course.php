<!DOCTYPE html>
<html>
<head>
    <title>Hapus Kursus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        include '..\asset\koneksi.php';

        $id = $_GET['id'];

        $query = "SELECT * FROM kursus WHERE id = $id";
        $result = mysqli_query($koneksi, $query);
        $course = mysqli_fetch_assoc($result);

        if (!$course) {
            echo "<div class='alert alert-danger'>Kursus tidak ditemukan.</div>";
            exit();
        }
        ?>

        <h2 class="mt-4">Hapus Kursus</h2>
        <p>Apakah Anda yakin ingin menghapus kursus ini?</p>
        <form action="process_delete_course.php" method="post">
            <input type="hidden" name="id" value="<?php echo $course['id']; ?>">
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
</body>
</html>