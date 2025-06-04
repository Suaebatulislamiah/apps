

@extends('layouts.dashboard')

@section('content')
    <x-alert type="info" message="Ini adalah halaman profil pengguna." />
    <h2>Profil Pengguna</h2>
    <ul>
        <li><strong>Nama:</strong> {{ $nama }}</li>
        <li><strong>NIM:</strong> {{ $nim }}</li>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Prodi:</strong> {{ $prodi }}</li>
        <li><strong>Alamat:</strong> {{ $alamat }}</li>
    </ul>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Contoh script khusus halaman profil
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire('Selamat datang di halaman profil!');
        });
    </script>
@endpush