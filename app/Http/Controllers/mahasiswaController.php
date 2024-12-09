<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    //index
    function index()
    {
        return view('mahasiswa');
    }


}
