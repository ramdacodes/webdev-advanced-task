<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'program_studi' => 'required|string',
        ]);

        return view('biodata.show', ['data' => $request->all()]);
    }
}
