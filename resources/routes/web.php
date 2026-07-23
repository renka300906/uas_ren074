<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UasController;
use App\Http\Controllers\UtsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Konversi 1:1 dari struktur folder PHP native RENUHUY ke Laravel.
| index.php        -> /
| uts/index.php    -> /uts
| uts/proses.php   -> /uts/proses
| uas/Index.php    -> /uas            (frameset asli)
| uas/Header.php   -> /uas/header
| uas/menu.php     -> /uas/menu
| uas/beranda.php  -> /uas/beranda
| uas/daftarproduk.php -> /uas/daftarproduk
| uas/profil.php   -> /uas/profil
| uas/data/*.php   -> /uas/data/*     (CRUD Mahasiswa)
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// ===== UTS: Formulir Pendaftaran =====
Route::prefix('uts')->name('uts.')->group(function () {
    Route::get('/', [UtsController::class, 'index'])->name('index');
    Route::get('/proses', [UtsController::class, 'proses'])->name('proses');
});

// ===== UAS: Kedai Makanan =====
Route::prefix('uas')->name('uas.')->group(function () {
    Route::get('/', [UasController::class, 'index'])->name('index');
    Route::get('/header', [UasController::class, 'header'])->name('header');
    Route::get('/menu', [UasController::class, 'menu'])->name('menu');
    Route::get('/beranda', [UasController::class, 'beranda'])->name('beranda');
    Route::get('/daftarproduk', [UasController::class, 'daftarproduk'])->name('daftarproduk');
    Route::get('/profil', [UasController::class, 'profil'])->name('profil');

    // ----- uas/data: CRUD Mahasiswa -----
    Route::prefix('data')->name('data.')->group(function () {
        Route::get('/', [MahasiswaController::class, 'index'])->name('index');
        Route::get('/tambah', [MahasiswaController::class, 'create'])->name('tambah');
        Route::post('/simpan', [MahasiswaController::class, 'store'])->name('simpan');
        Route::get('/edit/{npm}', [MahasiswaController::class, 'edit'])->name('edit');
        Route::post('/update', [MahasiswaController::class, 'update'])->name('update');
        Route::get('/hapus/{npm}', [MahasiswaController::class, 'destroy'])->name('hapus');
    });
});
