<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLIKlinik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #1e73be;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            display: flex;
            justify-content: space-around;
            margin: 50px auto;
            max-width: 900px;
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 40%;
            text-align: center;
        }
        .card h3 {
            color: #1e73be;
        }
        .card p {
            font-size: 14px;
            margin: 15px 0;
        }
        .card a {
            display: inline-block;
            padding: 10px 15px;
            color: white;
            background-color: #1e73be;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .card a:hover {
            background-color: #155a96;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sistem Temu Janji Pasien - Dokter</h1>
        <p>Bimbingan Karir 2024 Bidang Web</p>
    </header>
    <div class="container">
        <div class="card">
            <h3>Registrasi Sebagai Pasien</h3>
            <p>Apabila Anda adalah seorang Pasien, silahkan Registrasi terlebih dahulu untuk melakukan pendaftaran sebagai Pasien!</p>
            <a href="<?= site_url('pasien/register'); ?>" class="btn">Klik Link Berikut!</a>
        </div>
        <div class="card">
            <h3>Login Sebagai Dokter</h3>
            <p>Apabila Anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk memulai melayani Pasien!</p>
            <a href="<?= site_url('login'); ?>" class="btn">Klik Link Berikut!</a>
        </div>
    </div>
</body>
</html>
