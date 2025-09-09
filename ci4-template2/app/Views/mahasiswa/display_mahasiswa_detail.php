
    <h3>Detail Mahasiswa</h3>

    <table border="1" cellpadding="5" cellspacing="0">
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

    <br>
    <a href="<?= site_url('mahasiswa') ?>">⬅️ Kembali ke Data Mahasiswa</a>

