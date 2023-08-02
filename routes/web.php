<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BackController, AbsensiController, ClientController, LaporanController,};

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/login-admin', [BackController::class, 'login_admin'])->name('login-admin');
Route::get('/login-client', [BackController::class, 'login_client'])->name('login-client');
Route::post('/proses-login', [BackController::class, 'post_login'])->name('proses-login');
Route::post('/logout', [BackController::class, 'logout'])->name('logout');
// dashboard route
Route::group(['prefix' => '/dashboard', 'middleware' => 'cek-admin'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
    Route::get('/data-karyawan', [BackController::class, 'data_karyawan'])->name('data-karyawan');

    Route::group(['prefix' => '/absensi'], function () {
        Route::get('/daftar-absensi', [AbsensiController::class, 'daftar_absensi'])->name('daftar-absensi');
        Route::get('/daftar-absensi-user', [AbsensiController::class, 'daftar_absensi_user'])->name('daftar-absensi-user');
    });

    Route::group(['prefix' => '/laporan'], function () {
        Route::get('/daftar-laporan', [LaporanController::class, 'daftar_laporan'])->name('daftar-laporan');
        Route::get('/daftar-laporan-user', [LaporanController::class, 'daftar_laporan_user'])->name('daftar-laporan-user');
    });
});

// client route

Route::group(['prefix' => '/client', 'middleware' => 'cek-user'], function () {
    Route::get('/', [ClientController::class, 'index'])->name(('client'));
    Route::get('/absen', [ClientController::class, 'absen'])->name(('absen'));
    Route::get('/absen-cam', [ClientController::class, 'absen_cam'])->name(('absen-cam'));
    Route::get('/absen-loc', [ClientController::class, 'absen_loc'])->name(('absen-loc'));
    Route::post('/konfir-absen', [AbsensiController::class, 'konfirmasi_absen'])->name(('konfir-absen'));
    Route::get('/kegiatan', [ClientController::class, 'kegiatan'])->name(('kegiatan'));
});
