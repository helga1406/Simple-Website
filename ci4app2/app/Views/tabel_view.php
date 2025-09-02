<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
        </tr>
        <?php foreach ($dataTabel as $row): ?>
        <tr>
            <td><?= esc($row['id']); ?></td>
            <td><?= esc($row['nama']); ?></td>
            <td><?= esc($row['nim']); ?></td>
            <td><?= esc($row['kelas']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
