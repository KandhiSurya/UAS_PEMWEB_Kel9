<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('homepageAdmin');
});
Route::get('/admin/timbangan', function () {
    return view('Timbangan');
});