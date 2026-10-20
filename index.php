<?php
// ==========================================
// Tugas 7 Pemrograman Internet - PHP Dasar
// ==========================================

// Data mahasiswa dalam array multidimensi (associative array)
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Dadang Seher",
        "jurusan" => "Sastra Mesin",
        "email" => "dadang@upi.edu",
        "nilai" => 88
    ],
    [
        "nim" => "25002",
        "nama" => "Budiman",
        "jurusan" => "Kedokteran Rekayasa Pembuluh Darah",
        "email" => "budiman@upi.edu",
        "nilai" => 76
    ],
    [
        "nim" => "25003",
        "nama" => "Mas Gatot",
        "jurusan" => "Kedokteran Elektro",
        "email" => "gatot@upi.edu",
        "nilai" => 67
    ],
    [
        "nim" => "25004",
        "nama" => "Hasan Sadikin",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "hasan@upi.edu",
        "nilai" => 92
    ],
    [
        "nim" => "25005",
        "nama" => "Atorikririk",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "atorik@upi.edu",
        "nilai" => 58
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa - Tugas 7</title>
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
        .kotak-utama {
            max-width: 900px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .judul-halaman {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        .judul-halaman h2 {
            margin: 0;
            font-size: 24px;
            color: #222;
        }
        .judul-halaman p {
            margin: 5px 0 0 0;
            color: #555;
            font-size: 14px;
        }
        .btn-pesan {
            background-color: #0d6efd;
            color: white;
            text-decoration: none;
            padding: 9px 16px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 500;
        }
        .btn-pesan:hover {
            background-color: #0b5ed7;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #dee2e6;
        }
        th, td {
            padding: 12px 14px;
            text-align: left;
            font-size: 14px;
        }
        th {
            background-color: #eef2ff;
            color: #333;
        }
        .btn-detail {
            display: inline-block;
            background-color: #0d6efd;
            color: #ffffff;
            padding: 7px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 13px;
        }
        .btn-detail:hover {
            background-color: #0b5ed7;
        }
        .status-lulus {
            color: #198754;
            font-weight: bold;
        }
        .status-gagal {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="kotak-utama">
    <div class="judul-halaman">
        <div>
            <h2>Daftar Mahasiswa</h2>
            <p>Mini Website PHP Dasar</p>
        </div>
        <a href="form_pesan.php" class="btn-pesan">Isi Form Pesan</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) {
                $nilai = $row['nilai'];

                // Percabangan untuk menentukan Grade
                if ($nilai >= 80) {
                    $grade = "A";
                } elseif ($nilai >= 70) {
                    $grade = "B";
                } elseif ($nilai >= 60) {
                    $grade = "C";
                } else {
                    $grade = "D";
                }

                // Percabangan untuk menentukan Status Lulus
                if ($nilai >= 70) {
                    $status = "Lulus";
                    $class_status = "status-lulus";
                } else {
                    $status = "Tidak Lulus";
                    $class_status = "status-gagal";
                }
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jurusan']; ?></td>
                <td><?php echo $row['nilai']; ?></td>
                <td><?php echo $grade; ?></td>
                <td class="<?php echo $class_status; ?>"><?php echo $status; ?></td>
                <td>
                    <a href="detail.php?nim=<?php echo $row['nim']; ?>&nama=<?php echo $row['nama']; ?>&jurusan=<?php echo $row['jurusan']; ?>&email=<?php echo $row['email']; ?>&nilai=<?php echo $row['nilai']; ?>&grade=<?php echo $grade; ?>&status=<?php echo $status; ?>" class="btn-detail">Lihat Detail</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>