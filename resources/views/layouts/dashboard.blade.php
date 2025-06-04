
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <hr>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <hr>
        <small>&copy; 2025 Toko Buku Online</small>
    </footer>

    <!-- @yield('scripts') -->
    @stack('scripts')
</body>
</html>