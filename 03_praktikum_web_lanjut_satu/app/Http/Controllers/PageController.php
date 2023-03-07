<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home', ['name' => "Website ini menyajikan beberapa keperluan yang sedang anda cari. 
        Banyak informasi yang setiap harinya akan kami update untuk anda.
        "]);;
    }

    public function product(){
        return view('product', ['product' => '
        <ul>
            <li>
                <a href="https://www.educastudio.com/category/marbel-edu-games">MARBEL EDU GAMES</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">MARBEL AND FRIENDS KIDS</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/riri-story-books">RIRI STORY BOOKS</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/kolak-kids-songs">KOLAK KIDS SONGS</a>
            </li>
        </ul>']);
    }

    public function news(){
        return view('news', ['news' => 'Good News!! <br>
        Minggu, 28 Februari 2023 <br>
        <ul>
                <a href="https://www.educastudio.com/news">1. News Viral</a> <br>
                <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19">2. News Covid 19</a>
        </ul>
        ']);
    }

    public function program(){
        return view('program', ['program' => '
        <ul>
            <a href="https://www.educastudio.com/program/karir">1. PROGRAM KARIR</a> <br>
            <a href="https://www.educastudio.com/program/magang">2. PROGRAM MAGANG</a> <br>
            <a href="https://www.educastudio.com/program/kunjungan-industri">2. PROGRAM KUNJUNGAN INDUSTRI</a>
        </ul>
        ']);
    }

    public function aboutus(){
        return view('about-us', ['aboutus' => "Website ini berguna untuk memudahkan kalian dalam mencari berbagai macam, seperti product ataupun tempat magang <br>
        Jadi, jangan lupa selalu pantau terus di website kami yaaa:)"]);;
    }

    public function index(){
        return view('contact-us', ['contactus' => '
        <ul>
            <li> Instagram: Educastudio</li>
            <li> Email: educastudio@gmail.com</li>
            <li> Telp: 081936791643</li>
        </ul>
        ']);;
    }
}
