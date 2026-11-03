<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard CV Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2>Daftar CV</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('biodata1150.create') }}" class="btn btn-primary mb-3">+ Buat CV Baru</a>

        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Foto</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Profesi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($biodatas as $data)
                <tr>
                    <td>
                        @if($data->foto_profil)
                            <img src="{{ asset('storage/' . $data->foto_profil) }}" width="50" class="rounded-circle">
                        @else
                            <span class="badge bg-secondary">Tanpa Foto</span>
                        @endif
                    </td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->profesi }}</td>
                    <td>
                        <a href="{{ route('cv.show', $data->id) }}" target="_blank" class="btn btn-info btn-sm">Lihat CV</a>
                        <a href="{{ route('biodata1150.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('biodata1150.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data CV.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
