<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

//routes

route::get('mahasiswa', [mahasiswaController::class, 'index']);