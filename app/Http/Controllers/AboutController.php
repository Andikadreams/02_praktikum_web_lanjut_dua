<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {   echo "Page ini Menggunakan Controller";
        echo "<br>";
        echo "NIM : 2141720238";
        echo "<br>";
        echo "Nama : Andika Ainur Wibowo";
    }
}
