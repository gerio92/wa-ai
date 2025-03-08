<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrTransaksiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\TransaksiController;


Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});


Route::get('/antri', [DrTransaksiController::class, 'index']);
Route::post('/get_pasien', [PasienController::class, 'getPasien'])->name('get_pasien');
Route::post('/get-dokter', [DokterController::class, 'getDokter'])->name('get_dokter');
Route::post('/drtransaksi', [DrTransaksiController::class, 'store'])->name('drtransaksi.store');


Route::get('/panggil', function () {
    return view('panggil');
});
Route::get('/get-pasien/{noregister}', [TransaksiController::class, 'getPasien'])->name('get-pasien');
// Route::post('/save-transaksi', [TransaksiController::class, 'store']);
Route::post('/save-transaksi', [TransaksiController::class, 'saveTransaksi'])->name('save-transaksi');;



Route::get('/report', function () {
    return view('report');
});

// Route CRUD Pasien
// Route::get('/tambah-pasien', [PasienController::class, 'create'])->name('pasien.create');
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index'); // Menampilkan daftar pasien
// Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
// Route::get('/panggil/search', [PasienController::class, 'search'])->name('pasien.search');