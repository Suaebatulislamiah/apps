<h1>Daftar Post</h1>

<a href="{{ route('posts.create') }}" style="margin-bottom: 10px; display: inline-block;">Tambah Post</a>

@if (session('success'))
    <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
@endif

@if ($posts->count())
    <table border="1" cellpadding="10" cellspacing="0" style="width: 50%; text-align: left;">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        @if ($post->gambar)
                            <img src="{{ asset('images/' . $post->gambar) }}" alt="{{ $post->title }}" style="max-width: 100%; height: auto; width: 100px;">
                        @else
                            <span style="color: gray;">Tidak ada gambar</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" style="margin-right: 5px;">Show</a>
                        <a href="{{ route('posts.edit', $post->id) }}" style="margin-right: 5px;">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" style="color: red; background: none; border: none; cursor: pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p style="color: gray;">Tidak ada post.</p>
@endif