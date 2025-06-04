<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function hasil()
    {
        $nama = 'Andi';
        $nilai = 90; // Ganti sesuai kebutuhan
        return view('hasil_ujian', compact('nama', 'nilai'));
    }
}
