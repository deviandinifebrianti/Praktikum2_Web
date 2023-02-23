<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return 'Selamat Datang di Article Controller';
    }

    public function about() {
        echo "Devi Andini Febrianti - 2141720189 <br>";
        echo "Kediri - Jawa Timur";
    }

    public function articles($id) {
        echo "Artikel ini memiliki ID:  ".$id;
    }
}
