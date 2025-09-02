<h2>Edit Mahasiswa</h2>

<form method="post" action="/mahasiswa/update/<?= $mahasiswa['id'] ?>">
    <p>
        NIM: <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>" required>
    </p>
    <p>
        Nama: <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>" required>
    </p>
    <p>
        Kelas: <input type="text" name="kelas" value="<?= $mahasiswa['kelas'] ?>" required>
    </p>
    <p>
        <button type="submit">Update</button>
    </p>
</form>

<p><a href="/mahasiswa">&larr; Kembali</a></p>
