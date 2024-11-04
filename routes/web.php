<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sign.index');
});

Route::get('/dashboard', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('dashboard.index');
});

Route::get('/mahasiswa', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('mahasiswa.index');
});
