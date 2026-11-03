<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buat CV Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container" style="max-width: 600px;">
        <h2>Form Input Biodata CV</h2>
        <form action="{{ route('biodata1150.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Profesi / Bidang</label>
                <input type="text" name="profesi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>No. Telepon</label>
                <input type="text" name="telepon" class="form-control">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="mb-3">
                <label>Tentang Saya</label>
                <textarea name="tentang_saya" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label>Foto Profil</label>
                <input type="file" name="foto_profil" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-success">Simpan CV</button>
            <a href="{{ route('biodata1150.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
