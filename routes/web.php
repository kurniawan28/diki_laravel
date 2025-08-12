<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'moch diki',
        'umur'  => 17,
        'alamat'=> 'Indonesia',
    ]);
});



Route::view('/contact', 'pages.contact');
Route::view('/product','pages.detail');