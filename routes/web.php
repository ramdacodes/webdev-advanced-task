<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('hello')->controller(HelloController::class)->name('hello.')->group(function () {
    Route::get('/{mode?}', 'index')->name('index');
});

Route::prefix('biodata')->controller(BiodataController::class)->name('biodata.')->group(function () {
    Route::get('/', 'create')->name('create');
    Route::post('/', 'store')->name('store');
});
