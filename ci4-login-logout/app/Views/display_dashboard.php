<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <p>Halo, <b><?= session()->get('username'); ?></b> 👋 Selamat datang di dashboard.</p>

    <p>
        <a href="<?= base_url('/') ?>">🏠 Kembali ke Home</a> |
        <a href="<?= base_url('auth/logout') ?>">🚪 Logout</a>
    </p>
</body>
</html>
