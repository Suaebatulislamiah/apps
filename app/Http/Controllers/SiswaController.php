<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
        public function index()
    {
        $siswa = ['Andi', 'Budi', 'Cici', 'Dewi', 'Eka'];
        return view('daftar_siswa', compact('siswa'));
    }
}

