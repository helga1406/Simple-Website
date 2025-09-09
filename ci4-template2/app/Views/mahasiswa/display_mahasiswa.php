     <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>

        <?php if (!empty($biodata)): ?>
            <?php foreach ($biodata as $m): ?>
                <tr>
                    <td><?= esc($m['nim']) ?></td>
                    <td><?= esc($m['nama_lengkap']) ?></td>
                    <td><?= esc($m['jenis_kelamin']) ?></td>
                    <td><?= esc($m['tanggal_lahir']) ?></td>
                    <td>
                        <a href="<?= site_url('mahasiswa/detail/'.$m['nim']) ?>">Detail</a>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php else: ?>
            <tr>
                <td colspan="5" style="text-align:center;">Data mahasiswa tidak tersedia.</td>
            </tr>
        <?php endif ?>
    </table>


