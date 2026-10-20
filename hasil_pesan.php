<?php
// Validasi apakah data dikirim via POST
if (!isset($_POST['nama']) || !isset($_POST['kelas']) || !isset($_POST['pesan'])) {
    header("Location: form_pesan.php");
    exit;
}

// Tangkap nilai input form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$pesan = $_POST['pesan'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Berhasil Dikirim</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px 15px;
        }
        .kotak-kartu {
            max-width: 500px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 22px;
            color: #222;
        }
        p.salam {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 14px;
            color: #444;
        }
        .baris-info {
            background-color: #f8fafc;
            padding: 12px 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 14px;
            color: #333;
        }
        .btn-kembali-mhs {
            display: inline-block;
            background-color: #0d6efd;
            color: #ffffff;
            padding: 9px 18px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            margin-top: 10px;
        }
        .btn-kembali-mhs:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

<div class="kotak-kartu">
    <h2>Pesan Berhasil Dikirim</h2>
    <p class="salam">Terima kasih, <b><?php echo $nama; ?>!</b></p>

    <div class="baris-info"><b>Nama:</b> <?php echo $nama; ?></div>
    <div class="baris-info"><b>Kelas:</b> <?php echo $kelas; ?></div>
    <div class="baris-info"><b>Pesan / Kesan:</b> <?php echo $pesan; ?></div>

    <a href="index.php" class="btn-kembali-mhs">Kembali ke Data Mahasiswa</a>
</div>

</body>
</html>