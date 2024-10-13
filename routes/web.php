<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing;
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


Route::controller(Landing::class) -> group(function () {
    // awal login
    Route::get('/Login', 'login');
    Route::get('/Lupa-Password', 'lupapassword');
    Route::get('/Otp', 'otp');
    Route::get('/NewPassword', 'newpassword');
    // akhir login

    // Awal Landing Page
    Route::get('/', 'home');
    // Akhir Landing Page

    // Awal Admin
    Route::get('/BagianInformasi', 'bagianInformasi');

    Route::get('/BagianWaktu', 'bagianWaktu');
    Route::get('/BagianWaktu2', 'bagianWaktu2');

    Route::get('/BagianPermintaan', 'bagianPermintaan');
    Route::get('/BagianPermintaan2', 'bagianPermintaan2');

    Route::get('/BagianRiwayat', 'bagianRiwayat');
    Route::get('/BagianRiwayat/lihatRiwayat', 'lihatRiwayat');
    // Akhir Admin

    // Awal User
    Route::get('/UserPemesanan', 'userPemesanan');

    Route::get('/UserWaktu', 'userWaktu');

    Route::get('/UserPembayaran', 'userPembayaran');

    Route::get('/UserSelesai', 'userSelesai');
    // Akhir User
});