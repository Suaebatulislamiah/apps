
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buat Post Baru</title>
</head>
<body>
    <h1>Buat Post Baru</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input Judul -->
        <div>
            <label for="title">Judul:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Konten -->
        <div>
            <label for="content">Konten:</label><br>
            <textarea id="content" name="content" rows="5">{{ old('content') }}</textarea>
            @error('content')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Gambar -->
        <div>
            <label for="gambar">Gambar:</label><br>
            <input type="file" id="gambar" name="gambar">
            @error('gambar')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tombol Submit -->
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
