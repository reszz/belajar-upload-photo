<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Anggota</h2>
    <table class="table table-primary">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Action</th>
        </thead>
        <tbody>
            @forelse ($anggotas as $anggota)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$anggota->nama}}</td>
                <td>{{$anggota->email}}</td>
                <td>{{$anggota->foto_profil}}</td>
                <td>Show edit delete</td>
            </tr>
            @empty
            <tr>
                <td colspan=5>
                    Data tidak ditemukan
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</html>