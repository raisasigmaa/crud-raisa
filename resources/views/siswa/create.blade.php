<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa Baru</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 40px;
            background-color: #f4f6f9;
        }
        .container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            max-width: 500px;
            margin: 0 auto;
        }
        h2 { margin-top: 0; color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: 600; color: #495057; }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            box-sizing: border-box;
        }
        .btn-simpan {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        .btn-simpan:hover { background-color: #0056b3; }
        .btn-kembali {
            display: inline-block;
            margin-bottom: 15px;
            color: #6c757d;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="/siswa" class="btn-kembali">← Kembali ke Tabel</a>
    <h2>Tambah Data Siswa</h2>

    <form action="/siswa" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Siswa:</label>
            <input type="text" name="nama" placeholder="Masukkan nama siswa" required>
        </div>
        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" placeholder="Contoh: XII RPL 1" required>
        </div>
        <button type="submit" class="btn-simpan">Simpan Data</button>
    </form>
</div>

</body>
</html>sss