<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login',[
        "tittle"=>"Home"
    ]);
});
Route::get('/admin', function () {
    return view('homepageAdmin',[
        "tittle"=>"Admin"
    ]);
});
Route::get('/admin/timbangan', function () {
    return view('Timbangan', [
        "tittle"=>"Timbangan"
    ]);
});
Route::get('/admin/pembayaran', function () {
    return view('Pembayaran', [
        "tittle"=>"Pembayaran"
    ]);
});
