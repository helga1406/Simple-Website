<h2>Data Mahasiswa</h2>

<!-- Form Pencarian -->
<form method="get" action="/mahasiswa">
    <input type="text" name="keyword" placeholder="Cari mahasiswa..." value="<?= $_GET['keyword'] ?? '' ?>">
    <button type="submit">Cari</button>
</form>

<br>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php if (!empty($mahasiswa)) : ?>
        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['id']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['kelas']; ?></td>
            <td>
                <a href="/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a> |
                <a href="/mahasiswa/edit/<?= $mhs['id']; ?>">Edit</a> |
                <a href="/mahasiswa/delete/<?= $mhs['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="5">Data tidak ditemukan</td>
        </tr>
    <?php endif; ?>
</table>

<br>

<form action="/mahasiswa/create" method="get">
    <button type="submit">+ Tambah Mahasiswa</button>
</form>
