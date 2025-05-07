
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>

    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Judul</label><br>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
            @error('title')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="content">Konten</label><br>
            <textarea id="content" name="content" rows="5" required>{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="gambar">Gambar</label><br>
            <input type="file" id="gambar" name="gambar">
            @if ($post->gambar)
                <div>
                    <p>Gambar saat ini:</p>
                    <img src="{{ asset('images/' . $post->gambar) }}" alt="Gambar" width="150">
                </div>
            @endif
            @error('gambar')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>

</body>
</html>
