<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //halaman home mahasiswa
        return view('mahasiswa/mahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //halaman tambah mshasiswa
        return view('mahasiswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //simpan tambah mahasiswa
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //halaman detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //halaman edit mahasiswa
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //simpan   edit mahasiswa
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //hapus mashasiswa
    }
}
