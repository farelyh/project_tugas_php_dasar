<?php
// Validasi kelengkapan data via GET
if (
    !isset($_GET['nim']) ||
    !isset($_GET['nama']) ||
    !isset($_GET['jurusan']) ||
    !isset($_GET['email']) ||
    !isset($_GET['nilai']) ||
    !isset($_GET['grade']) ||
    !isset($_GET['status'])
) {
    // Jika tidak lengkap diarahkan kembali ke index.php
    header("Location: index.php");
    exit;
}

// Ambil data dari parameter URL
$nim = $_GET['nim'];
$nama = $_GET['nama'];
$jurusan = $_GET['jurusan'];
$email = $_GET['email'];
$nilai = $_GET['nilai'];
$grade = $_GET['grade'];
$status = $_GET['status'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
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
            margin-bottom: 20px;
            font-size: 22px;
            color: #222;
        }
        .baris-info {
            background-color: #f8fafc;
            padding: 12px 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 14px;
            color: #333;
        }
        .btn-kembali {
            display: inline-block;
            background-color: #0d6efd;
            color: #ffffff;
            padding: 9px 18px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            margin-top: 10px;
        }
        .btn-kembali:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

<div class="kotak-kartu">
    <h2>Detail Mahasiswa</h2>

    <div class="baris-info"><b>NIM:</b> <?php echo $nim; ?></div>
    <div class="baris-info"><b>Nama:</b> <?php echo $nama; ?></div>
    <div class="baris-info"><b>Jurusan:</b> <?php echo $jurusan; ?></div>
    <div class="baris-info"><b>Email:</b> <?php echo $email; ?></div>
    <div class="baris-info"><b>Nilai:</b> <?php echo $nilai; ?></div>
    <div class="baris-info"><b>Grade:</b> <?php echo $grade; ?></div>
    <div class="baris-info"><b>Status:</b> <?php echo $status; ?></div>

    <a href="index.php" class="btn-kembali">Kembali</a>
</div>

</body>
</html>