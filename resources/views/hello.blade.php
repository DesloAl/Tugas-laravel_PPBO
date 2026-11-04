<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Laravel</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        @foreach ($mahasiswas as $mahasiswa)
            <li>{{ $mahasiswa->Nama }} - {{ $mahasiswa->NIM }}</li>
        @endforeach
    </ul>
</body>
</html>