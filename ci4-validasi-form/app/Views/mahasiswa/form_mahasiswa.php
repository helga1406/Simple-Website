<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h1>Form Input Mahasiswa</h1>

    <!-- tampilkan error kalau ada -->
    <?php if (isset($validation)) : ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('mahasiswa/simpan') ?>" method="post">
        <p>
            <label for="nim">NIM</label><br>
            <input type="text" name="nim" id="nim" value="<?= old('nim') ?>">
        </p>

        <p>
            <label for="nama_lengkap">Nama Lengkap</label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= old('nama_lengkap') ?>">
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin</label><br>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="">--Pilih--</option>
                <option value="L" <?= old('jenis_kelamin') == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="P" <?= old('jenis_kelamin') == 'P' ? 'selected' : '' ?>>Perempuan</option>
            </select>
        </p>

        <p>
            <label for="tanggal_lahir">Tanggal Lahir</label><br>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= old('tanggal_lahir') ?>">
        </p>

        <p>
            <button type="submit">Simpan</button>
            <a href="<?= site_url('mahasiswa') ?>">Kembali</a>
        </p>
    </form>
</body>
</html>
