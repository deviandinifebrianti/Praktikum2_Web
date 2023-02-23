<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return 'Selamat Datang di About Controller';
    }

    public function about() {
        echo "Devi Andini Febrianti - 2141720189";
    }

    public function articles($id) {
        echo "Berikut ini adalah article ke- ".$id;
    }
}
