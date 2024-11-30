<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('profile', function () {
    $nama = 'Elaa';
    return view('profile', compact('nama'));
});

Route::get('array', function () {
    for ($i = 1; $i < 5; $i++) {
        echo 'Heloo world' . $i . 'x<br>';
    }
});
