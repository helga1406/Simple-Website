<h2>Tambah Mahasiswa</h2>

<form method="post" action="/mahasiswa/store">
    <p>
        <label>NIM:</label><br>
        <input type="text" name="nim" required>
    </p>
    <p>
        <label>Nama:</label><br>
        <input type="text" name="nama" required>
    </p>
    <p>
        <label>Kelas:</label><br>
        <input type="text" name="kelas" required>
    </p>
    <p>
        <button type="submit">Simpan</button>
        <button type="button" onclick="window.location.href='/mahasiswa'">Kembali</button>
    </p>
</form>
