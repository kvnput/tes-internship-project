<!DOCTYPE html>
<html>
<head>
    <title>Tambah Materi Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Tambah Materi Baru</h2>
        <form action="process_material.php" method="post">
            <div class="form-group">
                <label>Judul Materi:</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="form-group">
                <label>Deskripsi Materi:</label>
                <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label>Link Embed Materi:</label>
                <input type="text" class="form-control" name="link_embed" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>
