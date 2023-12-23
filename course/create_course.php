<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kursus Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Tambah Kursus Baru</h2>
        <form action="process_course.php" method="post">
            <div class="form-group">
                <label>Judul:</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="form-group">
                <label>Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label>Durasi (jam):</label>
                <input type="number" class="form-control" name="durasi" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>