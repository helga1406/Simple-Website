<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
</head>
<body>
    <h2>Form Input Biodata</h2>

    <!-- Form input -->
    <form action="biodata.php" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" id="nim" required><br><br>

        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" id="nama" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="L" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="P" required> Perempuan
        <br><br>

        <label for="tgl">Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" id="tgl" required><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim  = $_POST['nim'];
        $nama = $_POST['nama_lengkap'];
        $jk   = $_POST['jenis_kelamin'];
        $tgl  = $_POST['tanggal_lahir'];

        echo "<h2>Data yang Anda Input:</h2>";
        echo "NIM: $nim <br>";
        echo "Nama Lengkap: $nama <br>";
        echo "Jenis Kelamin: $jk <br>";
        echo "Tanggal Lahir: $tgl <br>";
    }
    ?>
</body>
</html>
