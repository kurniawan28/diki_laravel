<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'dicky kurniawan',
        'umur'  => 17,
        'alamat'=> 'Indonesia',
    ]);
});

    

Route::view('/contact', 'pages.contact');

// satu controller bisa punya banyak method
Route::get('/product', [ProdukController::class, 'index']);// read data menampilkan data

Route::get('/product/create', [ProdukController::class, 'create']); // menampilkan halaman from data
Route::post('/product', [ProdukController::class, 'store']); // untuk mengelolah data yang telah dikirim dari halaman from data
Route::get('/product/{id}', [ProdukController::class, 'show']);
