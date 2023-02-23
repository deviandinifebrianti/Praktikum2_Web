<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo "Selamat Datang";
    }

    public function about() {
        echo "Devi Andini Febrianti - 2141720189";
    }

    public function articles($id) {
        echo "Berikut ini adalah article ke- ".$id;
    }
}