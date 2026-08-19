<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <style>
        body { font-family: sans-serif; margin: 40px; background-color: #f4f6f9; }
        .container { background: #fff; padding: 25px; border-radius: 8px; max-width: 800px; margin: 0 auto; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        h2 { margin-top: 0; }
        .btn-tambah { display: inline-block; padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #007bff; color: white; }
        
        /* Style Tambahan untuk Tombol Aksi */
        .btn-edit { color: #007bff; text-decoration: none; font-weight: bold; margin-right: 10px; }
        .btn-hapus { background: #dc3545; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer; font-weight: bold; }
        .btn-hapus:hover { background: #bd2130; }
        .action-form { display: inline; }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Tabel Siswa</h2>
    
    <!-- Link Tambah Siswa -->
    <a href="/siswa/create" class="btn-tambah" style="display: inline-block; cursor: pointer; position: relative; z-index: 10;">+ Tambah Siswa Baru</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswas as $key => $siswa)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="/siswa/{{ $siswa->id }}/edit" class="btn-edit">Edit</a>
                        
                        <!-- Form Tombol Hapus/Delete -->
                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="action-form" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Belum ada data siswa di database.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>