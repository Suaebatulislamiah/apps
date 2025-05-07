<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Post</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>

    @if ($post->gambar)
        <div>
            <img src="{{ asset('images/' . $post->gambar) }}" alt="{{ $post->title }}" style="width: 300px; height: auto;">
        </div>
    @endif

    <p>{{ $post->content }}</p>

    <p><a href="{{ route('posts.index') }}">← Kembali ke daftar</a></p>
</body>
</html>