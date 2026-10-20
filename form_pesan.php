<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan Mahasiswa</title>
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
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            font-size: 14px;
            color: #333;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-family: inherit;
            font-size: 14px;
        }
        input[type="text"]:focus, textarea:focus {
            outline: none;
            border-color: #86b7fe;
        }
        .btn-kirim {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 9px 18px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            font-weight: 500;
        }
        .btn-kirim:hover {
            background-color: #0b5ed7;
        }
        .btn-kembali {
            display: inline-block;
            background-color: #6c757d;
            color: white;
            padding: 9px 18px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            margin-left: 6px;
        }
        .btn-kembali:hover {
            background-color: #5c636a;
        }
    </style>
</head>
<body>

<div class="kotak-kartu">
    <h2>Form Pesan Mahasiswa</h2>

    <form action="hasil_pesan.php" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" required>
        </div>

        <div class="form-group">
            <label for="pesan">Pesan / Kesan</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn-kirim">Kirim</button>
        <a href="index.php" class="btn-kembali">Kembali</a>
    </form>
</div>

</body>
</html>