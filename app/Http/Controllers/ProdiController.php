<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function ti(){
        return "Selamat datang di Jurusan Teknologi Informasi";
    }

    public function mi(){
        return "Selamat Datang di Program studi Manajemen Informatika";
    }
}
