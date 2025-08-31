<?php
include "koneksi_db.php";

// ====== PROSES HAPUS DATA ======
if (isset($_GET['hapus'])) {
    $nim = mysqli_real_escape_string($koneksi, $_GET['hapus']);
    $sql = "DELETE FROM biodata WHERE nim='$nim'";
    if (mysqli_query($koneksi, $sql)) {
        echo "<p style='color:green;'>Data dengan NIM $nim berhasil dihapus.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($koneksi) . "</p>";
    }
}

// ====== PROSES UPDATE DATA ======
if (isset($_POST['update'])) {
    $nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
    $jk   = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $tgl  = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);

    $sql = "UPDATE biodata 
            SET nama_lengkap='$nama', jenis_kelamin='$jk', tanggal_lahir='$tgl'
            WHERE nim='$nim'";

    if (mysqli_query($koneksi, $sql)) {
        echo "<p style='color:green;'>Data dengan NIM $nim berhasil diupdate.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($koneksi) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Biodata Mahasiswa</title>
</head>
<body>
    <h2>Daftar Biodata Mahasiswa</h2>

    <!-- Form Pencarian -->
    <form method="GET" action="">
        <select name="by">
            <option value="nim" <?= (isset($_GET['by']) && $_GET['by']=="nim") ? "selected" : "" ?>>Cari berdasarkan NIM</option>
            <option value="nama_lengkap" <?= (isset($_GET['by']) && $_GET['by']=="nama_lengkap") ? "selected" : "" ?>>Cari berdasarkan Nama</option>
        </select>
        <input type="text" name="keyword" placeholder="Masukkan kata kunci"
               value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
        <button type="submit">Search</button>
    </form>
    <br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr style="background-color:#f2f2f2;">
            <th>No</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>

        <?php
        // ====== PROSES SEARCH ======
        $where = "";
        if (!empty($_GET['keyword'])) {
            $keyword = mysqli_real_escape_string($koneksi, $_GET['keyword']);
            $by = (isset($_GET['by']) && in_array($_GET['by'], ['nim','nama_lengkap'])) ? $_GET['by'] : 'nim';
            $where = "WHERE $by LIKE '%$keyword%'";
        }

        $sql = "SELECT * FROM biodata $where ORDER BY nim ASC";
        $result = mysqli_query($koneksi, $sql);
        $no = 1;

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Jika tombol edit ditekan, tampilkan form edit
                if (isset($_GET['edit']) && $_GET['edit'] == $row['nim']) {
                    echo "<tr>";
                    echo "<form method='POST' action=''>";
                    echo "<td>".$no++."</td>";
                    echo "<td><input type='text' name='nim' value='".htmlspecialchars($row['nim'])."' readonly></td>";
                    echo "<td><input type='text' name='nama_lengkap' value='".htmlspecialchars($row['nama_lengkap'])."'></td>";
                    echo "<td>
                            <select name='jenis_kelamin'>
                                <option value='L' ".($row['jenis_kelamin']=='L'?'selected':'').">Laki-laki</option>
                                <option value='P' ".($row['jenis_kelamin']=='P'?'selected':'').">Perempuan</option>
                            </select>
                          </td>";
                    echo "<td><input type='date' name='tanggal_lahir' value='".htmlspecialchars($row['tanggal_lahir'])."'></td>";
                    echo "<td>
                            <button type='submit' name='update'>Simpan</button>
                            <a href='list_biodata.php'>Batal</a>
                          </td>";
                    echo "</form>";
                    echo "</tr>";
                } else {
                    // Tampilan normal (bukan edit)
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".htmlspecialchars($row['nim'])."</td>";
                    echo "<td>".htmlspecialchars($row['nama_lengkap'])."</td>";
                    echo "<td>".($row['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan')."</td>";
                    echo "<td>".htmlspecialchars($row['tanggal_lahir'])."</td>";
                    echo "<td>
                            <a href='detail_biodata.php?nim=".$row['nim']."'>Detail</a> | 
                            <a href='list_biodata.php?edit=".$row['nim']."'>Edit</a> | 
                            <a href='list_biodata.php?hapus=".$row['nim']."' onclick=\"return confirm('Yakin mau hapus data ini?')\">Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            }
        } else {
            echo "<tr><td colspan='6' style='text-align:center;'>Data tidak ditemukan</td></tr>";
        }
        ?>
    </table>

    <br>
    <a href="biodata_db.php">+ Tambah Data</a>
</body>
</html>
