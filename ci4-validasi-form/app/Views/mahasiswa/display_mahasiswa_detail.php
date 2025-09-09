<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>

    <?php if (!empty($mhs)): ?>
        <table border= 1 cellpadding="5">
            <tr>
                <th>NIM</th>
                <td><?= esc($mhs['nim']) ?></td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td><?= esc($mhs['nama_lengkap']) ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?= esc($mhs['jenis_kelamin']) ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?= esc($mhs['tanggal_lahir']) ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>Data mahasiswa tidak ditemukan.</p>
    <?php endif; ?>

    <a href="<?= site_url('mahasiswa') ?>">Kembali ke Daftar Mahasiswa</a>
</body>
</html>
