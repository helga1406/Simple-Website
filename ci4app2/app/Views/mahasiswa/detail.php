<h2>Detail Mahasiswa</h2>

<p><strong>ID:</strong> <?= $mahasiswa['id'] ?></p>
<p><strong>NIM:</strong> <?= $mahasiswa['nim'] ?></p>
<p><strong>Nama:</strong> <?= $mahasiswa['nama'] ?></p>
<p><strong>Kelas:</strong> <?= $mahasiswa['kelas'] ?></p>

<form action="/mahasiswa" method="get">
    <button type="submit">Kembali</button>
</form>
