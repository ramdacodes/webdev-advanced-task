<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to('mahasiswa');
});


Route::resource('mahasiswa', MahasiswaController::class);
