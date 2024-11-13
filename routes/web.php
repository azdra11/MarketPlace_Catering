<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('merchant.pages.menu');
});

Route::get('/merchant_menu', function () {
    return view('merchant.pages.menu');
});

Route::get('/merchant_pesanan', function () {
    return view('merchant.pages.pesanan');
});

Route::get('/merchant_profil', function () {
    return view('merchant.pages.profil');
});