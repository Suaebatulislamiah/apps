<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Master')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li><a href="{{ route('siswa.index') }}">Daftar Siswa</a></li>
                <li><a href="{{ route('hasil_ujian.index') }}">Hasil Ujian</a></li>
                <li><a href="{{ route('profil') }}">Profil</a></li>
            </ul>
        <h1>Dashboard</h1>
        <hr>
    </header>
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    
    <!-- @yield('scripts') -->
    @stack('scripts')
</body>
</html>