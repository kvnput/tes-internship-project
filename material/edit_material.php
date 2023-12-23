<!DOCTYPE html>
<html>
<head>
    <title>Tambah/Edit Materi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        include '..\asset\koneksi.php';

        $id = $_GET['id'];

        $query = "SELECT * FROM materi WHERE id = $id";
        $result = mysqli_query($koneksi, $query);
        $material = mysqli_fetch_assoc($result);

        if (!$material) {
            echo "Materi tidak ditemukan.";
            exit();
        }
        ?>

        <h2>Edit Materi</h2>
        <form action="process_edit_material.php" method="post">
            <input type="hidden" name="id" value="<?php echo $material['id']; ?>">
            <div class="form-group">
                <label>Judul Materi:</label>
                <input type="text" name="judul" value="<?php echo $material['judul']; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Deskripsi Materi:</label>
                <textarea name="deskripsi" rows="4" class="form-control" required><?php echo $material['deskripsi']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Link Embed Materi:</label>
                <input type="text" name="link_embed" value="<?php echo $material['link_embed']; ?>" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
