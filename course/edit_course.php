<!DOCTYPE html>
<html>
<head>
    <title>Edit Kursus</title>
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

        <h2 class="mt-4">Edit Kursus</h2>
        <form action="process_edit_course.php" method="post">
            <input type="hidden" name="id" value="<?php echo $course['id']; ?>">
            <div class="form-group">
                <label>Judul:</label>
                <input type="text" class="form-control" name="judul" value="<?php echo $course['judul']; ?>" required>
            </div>
            <div class="form-group">
                <label>Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" rows="4" required><?php echo $course['deskripsi']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Durasi (jam):</label>
                <input type="number" class="form-control" name="durasi" value="<?php echo $course['durasi']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
