<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting()
    {
        $pesan = 'Selamat belajar laravel blade';
        return view('greeting', compact('pesan'));
    }
}
