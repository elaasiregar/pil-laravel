<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    $npm = [123, 124, 125, 126];
    $nama = ['joko', 'joni', 'jono', 'jaka'];
    $jumlah = count($npm);
    return view('mahasiswa', compact('npm', 'jumlah', 'nama'));
});

Route::get('profile', function () {
    $nama = 'Elaa';
    //return view('profile', compact('nama'));
    return view('profile')->with('nama', $nama);
});
