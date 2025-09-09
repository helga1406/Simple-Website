<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            border: 1px solid black;
        }
        .header {
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .menu {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            padding: 10px;
        }
        .menu a {
            margin-right: 15px;
            text-decoration: none;
            color: purple;
            font-size: 16px;
        }
        .content {
            min-height: 250px;
            padding: 20px;
            text-align: center;
        }
        .footer {
            border-top: 1px solid black;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
        table {
            margin: auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px 15px;
        }
        th {
            background-color: #f2f2f2;
        }
        a.detail {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            WEBSITE MAHASISWA 
        </div>

        <!-- Menu -->
        <div class="menu">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('/mahasiswa') ?>">Data Mahasiswa</a>
        </div>

        <!-- Content -->
        <div class="content">
              <?= $content ?>
        </div>

        <!-- Footer -->
        <div class="footer">
            Bandung - Jawa Barat
        </div>
    </div>
</body>
</html>
