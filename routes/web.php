<?php

use App\Http\Controllers\BeritaController;
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

// Sub Bagian Profil

Route::get('/visi_misi', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('visi_misi.index');
});

Route::get('/struktur_organisasi', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('struktur_organisasi.index');
});

// Selesai

// Sub Bagian Bidang 

Route::get('/bidang', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('bidang.index');
});

// Selesai

// Sub Bagian Informasi


Route::get('/berita',[BeritaController::class,'index'])->name('berita.index');
Route::get('/addberita',[BeritaController::class,'create'])->name('berita.add');
Route::post('/berita',[BeritaController::class,'store'])->name('berita.store');

// Route::get('/berita', function () {
//     if (empty(session('name')))
//         return redirect('/')->send();
//     else
//         return view('berita.index');
// });


// Route::get('/addberita', function () {
//     if (empty(session('name')))
//         return redirect('/')->send();
//     else
//         return view('berita.add');
// });

Route::get('/potensi_daerah', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('potensi_daerah.index');
});

Route::get('/addpotensi_daerah', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('potensi_daerah.add');
});

// Selesai

// Sub Bagian Media

Route::get('/foto', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('foto.index');
});

Route::get('/addfoto', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('foto.add');
});

Route::get('/video', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('videoo.index');
});

Route::get('/addvideo', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('videoo.add');
});

// Selesai

Route::get('/hubungi_kami', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('hubungi_kami.index');
});















Route::get('/mahasiswa', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('mahasiswa.index');
});

Route::get('/addMahasiswa', function () {
    if (empty(session('name')))
        return redirect('/')->send();
    else
        return view('mahasiswa.add');
});
