<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Course Online</title>
        <link rel="stylesheet" href="..\asset\style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="mt-4">Selamat datang di Manajemen Kursus Online</h1>

            <!-- Tabel Kursus -->
            <h2>Kursus</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Durasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Sertakan koneksi ke database
                        include 'asset/koneksi.php';

                        // Kueri untuk mendapatkan data kursus dari database
                        $queryKursus = "SELECT * FROM kursus";
                        $resultKursus = mysqli_query($koneksi, $queryKursus);

                        while ($rowKursus = mysqli_fetch_assoc($resultKursus)) {
                            echo "<tr>";
                            echo "<td>" . $rowKursus['judul'] . "</td>";
                            echo "<td>" . $rowKursus['deskripsi'] . "</td>";
                            echo "<td>" . $rowKursus['durasi'] . " jam</td>";
                            echo "<td><a href='course/edit_course.php?id=" . $rowKursus['id'] . "' class='btn btn-primary btn-sm'>Edit</a> | <a href='course/delete_course.php?id=" . $rowKursus['id'] . "' class='btn btn-danger btn-sm'>Hapus</a></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <a href="course/create_course.php" class="btn btn-primary mb-2">Tambah Kursus Baru</a>

            <!-- Tabel Materi -->
            <h2>Materi</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Judul Materi</th>
                        <th>Deskripsi Materi</th>
                        <th>Link Embed Materi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Kueri untuk mendapatkan data materi dari database
                        $queryMateri = "SELECT * FROM materi";
                        $resultMateri = mysqli_query($koneksi, $queryMateri);

                        while ($rowMateri = mysqli_fetch_assoc($resultMateri)) {
                            echo "<tr>";
                            echo "<td>" . $rowMateri['judul'] . "</td>";
                            echo "<td>" . $rowMateri['deskripsi'] . "</td>";
                            echo "<td>" . $rowMateri['link_embed'] . "</td>";
                            echo "<td><a href='material/edit_material.php?id=" . $rowMateri['id'] . "' class='btn btn-primary btn-sm'>Edit</a> | <a href='material/delete_material.php?id=" . $rowMateri['id'] . "' class='btn btn-danger btn-sm'>Hapus</a></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <a href="material/create_material.php" class="btn btn-primary mb-2">Tambah Materi Baru</a>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>&copy; 2023 <span>Putri Oktavianti</span> | Hak cipta dilindungi!</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
