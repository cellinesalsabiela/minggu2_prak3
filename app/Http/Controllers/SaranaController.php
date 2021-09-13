<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function perkantoran(){
        return "Perkantoran";
    }

    public function laboratorium(){
        return "Labotarium";
    }

    public function kelas(){
        return "Ruang Kelas JTI";
    }

    public function lainnya(){
        return "Lainnya";
    }
}
