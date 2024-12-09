<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

//routes

Route::resource('mahasiswa', mahasiswaController::class);
