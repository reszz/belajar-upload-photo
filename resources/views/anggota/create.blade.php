<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h2>Pendaftaran Anggota</h2>
    <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="foto_profil" class="form-label">Foto Profil:</label>
        <input type="file" class="form-control" id="foto_profil" name="foto_profil" required>
    </div>
    <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</body>
</html>