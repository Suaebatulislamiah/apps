<?php
// filepath: app/Http/Controllers/ProfilController.php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    public function show()
    {
        $nama = 'Suaebatul Islamiah';
        $nim = 'SI20230031';
        $email = 'suaebatul@email.com';
        $prodi = 'Sistem Informasi';
        $alamat = 'Dakung Kec. Praya Tengah, Kab. Lombok Tengah, NTB';

        return view('profil', compact('nama', 'nim', 'prodi', 'email', 'alamat'));
    }
}