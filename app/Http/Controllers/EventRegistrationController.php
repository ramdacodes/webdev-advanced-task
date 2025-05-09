<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventRegistrationController extends Controller
{
    public function showForm()
    {
        return view('pendaftaran.index');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|max:100',
            'email' => 'required|email',
            'alasan' => 'nullable|max:250',
        ]);

        // Simulasi pendaftaran tanpa menyimpan ke DB
        return back()->with('success', 'Pendaftaran berhasil!');
    }
}
