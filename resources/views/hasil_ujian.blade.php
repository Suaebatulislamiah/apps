
<!-- filepath: resources/views/hasil_ujian.blade.php -->
@extends('layouts.dashboard')

@section('content')
    <h2>Hasil Ujian</h2>
    <p>Nama: {{ $nama }}</p>
    <p>Nilai: {{ $nilai }}</p>
    <p>
        Kategori:
        @if($nilai >= 90)
            <strong>Sangat Baik</strong>
        @elseif($nilai >= 75)
            <strong>Baik</strong>
        @elseif($nilai >= 60)
            <strong>Cukup</strong>
        @else
            <strong>Kurang</strong>
        @endif
    </p>
    @unless($nilai >= 60)
        <p style="color: red;">Siswa belum lulus.</p>
    @endunless

@endsection