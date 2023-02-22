<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(String $id){
        echo "Halaman Artikel dengan ID ".$id;
    }

}
