<?php
include "koneksi_db.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Biodata Mahasiswa</title>
</head>
<body>
    <h2>Detail Biodata Mahasiswa</h2>

    <?php
    if (isset($_GET['nim'])) {
        $nim = mysqli_real_escape_string($koneksi, $_GET['nim']);

        $sql = "SELECT * FROM biodata WHERE nim='$nim'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            echo "NIM : " . htmlspecialchars($row['nim']) . "<br>";
            echo "Nama Lengkap : " . htmlspecialchars($row['nama_lengkap']) . "<br>";
            echo "Jenis Kelamin : " . ($row['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan') . "<br>";
            echo "Tanggal Lahir : " . htmlspecialchars($row['tanggal_lahir']) . "<br>";
        } else {
            echo "<p style='color:red;'>Data tidak ditemukan!</p>";
        }
    } else {
        echo "<p style='color:red;'>NIM tidak diberikan!</p>";
    }
    ?>

    <br>
    <a href="list_biodata.php">⬅ Kembali ke Daftar</a>
</body>
</html>
