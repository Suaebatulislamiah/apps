@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <x-alert type="success" message="Selamat datang di halaman utama!" />
    <h2>Selamat datang di Laravel</h2>
    <p>Ini adalah halaman utama</p>
@endsection