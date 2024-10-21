<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sign.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.index');
});
