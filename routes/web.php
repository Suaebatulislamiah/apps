<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 1. Routing 1 parameter
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

// 2. Routing 2 parameter
Route::get('/stok_barang/{barang}/{merk}', function ($barang, $merk) {
    return "Cek sisa stok untuk $barang $merk";
});

// 3. Routing dengan default parameter
Route::get('/stok_barang/{barang?}/{merk?}', function ($barang = 'smartphone', $merk = 'samsung') {
    return "Cek sisa stok untuk $barang $merk";
});

// 4. Routing filter angka saja
Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[0-9]+');

// 5. Routing filter id 2 huruf + angka
Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '^[A-Za-z]{2}[0-9]+$');
