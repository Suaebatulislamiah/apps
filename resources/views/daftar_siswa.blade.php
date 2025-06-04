
<!-- filepath: resources/views/daftar_siswa.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
    <h2>Daftar Siswa</h2>
    <ul>
        @foreach($siswa as $nama)
            <li>{{ $nama }}</li>
        @endforeach
    </ul>
</body>
</html>