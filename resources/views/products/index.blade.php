
<!-- filepath: resources/views/products/index.blade.php -->
@extends('layouts.master')

@section('title', 'Daftar Produk')

@section('content')
    <h2>Daftar Produk</h2>
    <a href="{{ route('products.create') }}">Tambah Produk</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->nama }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}">Detail</a> |
                        <a href="{{ route('products.edit', $product) }}">Edit</a> |
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection