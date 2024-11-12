<?php

use App\Http\Controllers\Informasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing;
use App\Http\Controllers\Otentifikasi;
use App\Http\Controllers\Pemesanan;
use App\Http\Controllers\Waktu;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(Landing::class)->group(function () {
    // Awal Landing Page
    Route::get('/', 'home')->name('home');
    // Akhir Landing Page

    // Awal Admin
    // Route::get('/BagianPermintaan2', 'bagianPermintaan2');

    // Route::get('/BagianRiwayat/lihatRiwayat', 'lihatRiwayat');
    // Akhir Admin
});

Route::controller(Otentifikasi::class)->group(function () {
    Route::get('/Login', 'tampilanLogin')->name('login');
    Route::post('/Login', 'login');

    Route::get('/Logout', 'logout');

    Route::get('/Lupa-Password', 'tampilanLupaPassword');
    Route::post('/Lupa-Password', 'lupaPassword');

    Route::get('/Otp', 'tampilanOtp');
    Route::post('/Otp', 'otp');

    Route::get('/NewPassword', 'tampilanPasswordBaru');
    Route::post('/NewPassword', 'passwordBaru');
});

Route::controller(Informasi::class)->middleware('auth:web')->group(function () {
    Route::get('/BagianInformasi', 'tampilan');
    Route::post('/BagianInformasi', 'tambah');
    Route::delete('/BagianInformasi', 'hapus');
});

Route::controller(Waktu::class)->middleware('auth:web')->group(function () {
    Route::get('/BagianWaktu', 'tampilan');
    Route::post('/BagianWaktu', 'hapusWaktu');
});

Route::controller(Pemesanan::class)->group(function () {
    Route::middleware('auth:web')->group(function () {
        Route::get('/BagianPermintaan/{id}/detail', 'tampilanAdminDetailPermintaan');
        Route::get('/BagianPermintaan', 'tampilanAdminPermintaan');
        Route::delete('/BagianPermintaan', 'hapusPermintaan');

        Route::get('/BagianRiwayat/{id}/detail', 'tampilanAdminDetailRiwayat');
        Route::get('/BagianRiwayat', 'tampilanAdminRiwayat');
    });

    Route::get('/UserPemesanan', 'tampilanBiodata');
    Route::post('/UserPemesanan', 'tambahBiodata');

    Route::get('/UserWaktu', 'tampilanWaktu');
    Route::post('/UserWaktu', 'tambahWaktu');

    Route::get('/UserPembayaran', 'tampilanPembayaran');
    Route::post('/UserPembayaran', 'tambahTransaksi');

    Route::get('/UserSelesai', 'tampilanSelesai');
});
