<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Beranda']);
});

Route::get('/about', function () {
    return view('about',  ['title' => 'About']);
});

Route::get('/galeri', function () {
    return view('galeri', ['title' => 'Galeri']);
});

Route::get('/contact', function () {
    return view('contact',  ['title' => 'Contact']);
});

Route::get('/profil', function () {
    return view('profil',  ['title' => 'profil']);
});

Route::get('/agenda', function () {
    return view('agenda', ['title' => 'agenda']);
});


// sub menu smp

Route::get('/smp', function () {
    return view('smp', ['title' => 'smp']);
});

Route::get('/programsmp', function () {
    return view('programsmp', ['title' => 'programsmp']);
});

Route::get('/ekstrasmp', function () {
    return view('ekstrasmp', ['title' => 'ekstrasmp']);
});

Route::get('/prestasismp', function () {
    return view('prestasismp', ['title' => 'prestasismp']);
});

Route::get('/karyasmp', function () {
    return view('karyasmp', ['title' => 'karyasmp']);
});

Route::get('/tatibsmp', function () {
    return view('tatibsmp', ['title' => 'tatibsmp']);
});

Route::get('/ppdb', function () {
    return view('ppdb', ['title' => 'ppdb']);
});

// sub menu sd

Route::get('/sd', function () {
    return view('sd', ['title' => 'sd']);
});

Route::get('/programsd', function () {
    return view('programsd', ['title' => 'programsd']);
});

Route::get('/ekstrasd', function () {
    return view('ekstrasd', ['title' => 'ekstrasd']);
});

Route::get('/prestasisd', function () {
    return view('prestasisd', ['title' => 'prestasisd']);
});

Route::get('/karyasd', function () {
    return view('karyasd', ['title' => 'karyasd']);
});

Route::get('/tatibsd', function () {
    return view('tatibsd', ['title' => 'tatibsd']);
});

Route::get('/ppdb', function () {
    return view('ppdb', ['title' => 'ppdb']);
});

// sub menu ppdb

Route::get('/loginppdb', function () {
    return view('loginppdb', ['title' => 'loginppdb']);
});

// Route untuk halaman login
Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
});

// Route untuk halaman pendaftaran
Route::get('/pendaftaran', function () {
    return view('pendaftaran'); // Mengarahkan ke file pendaftaran.blade.php
});

// Route untuk proses login
Route::post('/login', function (Illuminate\Http\Request $request) {
    // Logika otentikasi di sini
    $credentials = $request->only('email', 'password');

    // Misalnya, menggunakan Auth facade untuk memverifikasi pengguna
    if (Auth::attempt($credentials)) {
        // Jika berhasil, alihkan ke halaman pendaftaran
        return redirect('/pendaftaran'); // Atau ke halaman dashboard jika ada
    }

    // Jika gagal, kembali ke halaman login dengan pesan error
    return redirect('/login')->withErrors('Email atau Password salah.');
});

