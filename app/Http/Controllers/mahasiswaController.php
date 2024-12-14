<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //halaman home mahasiswa
        return view('mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //halaman tambah mshasiswa
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //simpan tambah mahasiswa

        Session::flash('npm', $request->npm);
        Session::flash('nama_mahasiswa', $request->nama_mahasiswa);
        Session::flash('tgl_lahir', $request->tgl_lahir);
        Session::flash('alamat', $request->alamat);

        $request->validate(
            [
                'npm' => 'required|numeric|unique:mahasiswa2,npm',
                'nama_mahasiswa' => 'required',
                'jk' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required'
            ],
            [
                'npm.required' => 'NPM tidak boleh kosong!',
                'npm.numeric' => 'NPM harus diisi dalam bentuk angka',
                'npm.unique' => 'NPM sudah ada sebelumnya',
                'nama_mahasiswa.required' => 'Nama Mahasiswa tidak boleh kosong!',
                'jk.required' => 'Jenis Kelamin tidak boleh kosong!',
                'tgl_lahir.required' => 'Tanggal Lahir tidak boleh kosong!',
                'alamat.required' => 'Alamat tidak boleh kosong!'

            ]
        );
        $data = [
            'npm' => $request->npm,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ];
        mahasiswa::create($data);
        return redirect('/mahasiswa')->with('Success', 'Data Berhasil ditambahkan!');
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
