<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RegistrasiController;

Route::get('/', function () {
    return view('index');
});
// Form peserta
// Route::post('/peserta', [PesertaController::class, 'store'])->name('peserta.store');

// Form registrasi
// Route::get('/registrasi/create/{ID_Peserta}', [RegistrasiController::class, 'create'])->name('registrasi.create');
Route::post('/registrasi', [RegistrasiController::class, 'store'])->name('registrasi.store');


// Divisi
Route::get('/', [DivisiController::class, 'index'])->name('divisi');


//Admin Dashboard
Route::prefix('admin')->group(function () {
    // Halaman utama admin dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD Divisi
    Route::get('/divisis', [DivisiController::class, 'adminIndex'])->name('admin.divisis.index');
    Route::get('/divisis/create', [DivisiController::class, 'create'])->name('admin.divisis.create');
    Route::post('/divisis', [DivisiController::class, 'store'])->name('admin.divisis.store');
    Route::get('/divisis/{divisi}/edit', [DivisiController::class, 'edit'])->name('admin.divisis.edit');
    Route::put('/divisis/{divisi}', [DivisiController::class, 'update'])->name('admin.divisis.update');
    Route::delete('/divisis/{divisi}', [DivisiController::class, 'destroy'])->name('admin.divisis.destroy');

    // CRUD Peserta
    Route::get('/pesertas', [PesertaController::class, 'adminIndex'])->name('admin.pesertas.index');
    Route::get('/pesertas/create', [PesertaController::class, 'create'])->name('admin.pesertas.create');
    Route::post('/pesertas', [PesertaController::class, 'store'])->name('admin.pesertas.store');
    Route::get('/pesertas/{peserta}/edit', [PesertaController::class, 'edit'])->name('admin.pesertas.edit');
    Route::put('/pesertas/{peserta}', [PesertaController::class, 'update'])->name('admin.pesertas.update');
    Route::delete('/pesertas/{peserta}', [PesertaController::class, 'destroy'])->name('admin.pesertas.destroy');

    // CRUD Registrasi
    Route::get('/registrasis', [RegistrasiController::class, 'adminIndex'])->name('admin.registrasis.index');
    Route::get('/registrasis/create', [RegistrasiController::class, 'create'])->name('admin.registrasis.create');
    Route::post('/registrasis', [RegistrasiController::class, 'store'])->name('admin.registrasis.store');
    Route::get('/registrasis/{registrasi}/edit', [RegistrasiController::class, 'edit'])->name('admin.registrasis.edit');
    Route::put('/registrasis/{registrasi}', [RegistrasiController::class, 'update'])->name('admin.registrasis.update');
    Route::delete('/registrasis/{registrasi}', [RegistrasiController::class, 'destroy'])->name('admin.registrasis.destroy');

    // CRUD Magang
    Route::get('/magangs', [MagangController::class, 'adminIndex'])->name('admin.magangs.index');
    Route::get('/magangs/create', [MagangController::class, 'create'])->name('admin.magangs.create');
    Route::post('/magangs', [MagangController::class, 'store'])->name('admin.magangs.store');
    Route::get('/magangs/{magang}/edit', [MagangController::class, 'edit'])->name('admin.magangs.edit');
    Route::put('/magangs/{magang}', [MagangController::class, 'update'])->name('admin.magangs.update');
    Route::delete('/magangs/{magang}', [MagangController::class, 'destroy'])->name('admin.magangs.destroy');
});



