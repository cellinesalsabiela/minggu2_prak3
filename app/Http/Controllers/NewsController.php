<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id) {
        return "Halaman News dengan Id '$id'";
    }

}
