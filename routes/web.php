<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

// Mengarahkan alamat utama (127.0.0.1:8000) langsung ke Tabel Siswa
Route::get('/', [SiswaController::class, 'index']);

Route::resource('siswa', SiswaController::class);