<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
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
        .btn-update {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }
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
    <a href="{{ route('siswa.index') }}" class="btn-kembali">← Kembali</a>
    <h2>Edit Data Siswa</h2>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Siswa:</label>
            <input type="text" name="nama" value="{{ $siswa->nama }}" required>
        </div>
        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" value="{{ $siswa->kelas }}" required>
        </div>
        <button type="submit" class="btn-update">Update Data</button>
    </form>
</div>

</body>
</html>