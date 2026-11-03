<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container" style="max-width: 600px;">
        <h2>Edit Biodata CV</h2>
        <form action="{{ route('biodata1150.update', $biodata->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" value="{{ $biodata->nim }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" value="{{ $biodata->nama }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Profesi</label>
                <input type="text" name="profesi" value="{{ $biodata->profesi }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ $biodata->email }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>No. Telepon</label>
                <input type="text" name="telepon" value="{{ $biodata->telepon }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ $biodata->alamat }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Tentang Saya</label>
                <textarea name="tentang_saya" class="form-control" rows="3">{{ $biodata->tentang_saya }}</textarea>
            </div>
            <div class="mb-3">
                <label>Ganti Foto Profil (Opsional)</label>
                <input type="file" name="foto_profil" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update CV</button>
            <a href="{{ route('biodata1150.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
