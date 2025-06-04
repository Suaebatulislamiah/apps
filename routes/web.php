<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('home');
});

// Halaman statis
Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/namasaya', function () {
    echo "Suaebatul";
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


// Resource controller untuk Post
Route::resource('posts', PostController::class);

Route::resource('products', ProductController::class);

// Resource controller untuk Order
Route::resource('orders', OrderController::class);

// Route untuk halaman greeting
Route::get('/greeting', [GreetingController::class, 'greeting']);

// Route untuk halaman daftar siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

// Route untuk halaman profil
Route::get('/profil', [ProfilController::class, 'show'])->name('profil');

// Route untuk halaman hasil ujian 
Route::get('/hasil-ujian', [UjianController::class, 'hasil'])->name('hasil_ujian.index');

// Route untuk halaman home
Route::get('/home', [HomeController::class, 'index'])->name('home');