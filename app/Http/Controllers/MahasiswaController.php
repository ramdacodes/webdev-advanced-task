<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mahasiswa\CreateMahasiswaRequest;
use App\Http\Requests\Mahasiswa\UpdateMahasiswaRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::get();

        return view('mahasiswa.index', [
            'title' => 'Daftar Mahasiswa',
            'mahasiswa' => $mahasiswas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create', [
            'title' => 'Tambah Mahasiswa'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMahasiswaRequest $request)
    {
        Mahasiswa::create($request->all());

        return redirect()->to('mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($npm)
    {
        $mahasiswa = Mahasiswa::findOrFail($npm);

        return view('mahasiswa.edit', [
            'title' => 'Ubah Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, $npm)
    {
        $mahasiswa = Mahasiswa::findOrFail($npm);

        $mahasiswa->update($request->all());

        return redirect()->to('mahasiswa')->with('success', 'Mahasiswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($npm)
    {
        $mahasiswa = Mahasiswa::findOrFail($npm);

        $mahasiswa->delete();

        return redirect()->back()->with('success', 'Mahasiswa berhasil dihapus');
    }
}
