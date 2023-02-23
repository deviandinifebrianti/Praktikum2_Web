<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Selamat Datang di Home Controller';
    }

    public function about() {
        echo "Devi Andini Febrianti - 2141720189 - D4TI 2G";
    }

    public function articles($id) {
        echo "Berikut ini adalah article ke- ".$id;
    }
}
