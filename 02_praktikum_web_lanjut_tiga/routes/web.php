<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo "<h3 font-family: 'Nunito'> Welcome to the main menu!!!";
});

Route::prefix('halaman')->group(function() {
    Route::get('/marbel-edu-game', function () {
        return 'Berikut Ini Kami Tampilkan Halaman Marbel Edu Game';
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return 'Berikut Ini Kami Tampilkan Halaman Marbel and Friends Kids Games';
    });
    Route::get('/riri-story-books', function () {
        return 'Berikut Ini Kami Tampilkan Halaman Riri Story Books';
    });
    Route::get('/kolak-kids-songs', function () {
        return 'Berikut Ini Kami Tampilkan Halaman Kolak Kids Songs';
    });
});

Route::get('/media/{link?}', function($link=''){
    if ($link==''){
        echo 'Anda berhasil berada di dalam daftar media kami! EDUCASTUDIO';
    } else {
        echo 'Berikut adalah halaman media educa studio "berbagi untuk warga sekitar terdampak covid-19"';
    }
});

Route::prefix('program')->group(function(){
    Route::get('/karir', function(){
        echo "Berikut Halaman Karir!!";
    });

    Route::get('/magang', function(){
        echo "Berikut Halaman Magang!!";
    });

    Route::get('/kunjungan-industri', function(){
        echo "Berikut Halaman Kunjungan Industri!!";
    });
});

Route::get('/aboutus', function(){
    return 'Anda sedang berada di halaman About Us!!';
});

Route::resource('/contact-us', ContactController::class)->only(["show"]);