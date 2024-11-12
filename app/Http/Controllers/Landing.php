<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

class Landing extends Controller
{
    // awal login
    function login()
    {
        return view('pages/dashboard/admin/login');
    }
    function lupapassword()
    {
        return view('pages/dashboard/admin/lupaPassword');
    }
    function otp()
    {
        return view('pages/dashboard/admin/otp');
    }
    function newpassword()
    {
        return view('pages/dashboard/admin/newpassword');
    }
    // akhir login

    // Awal Landing page
    function home(Request $request)
    {
        $tanggal = $request->query('tanggal');
        $pemesanan = Pemesanan::with(['waktuAwal', 'waktuAkhir'])
            ->where(function (Builder $query) use ($tanggal) {
                if ($tanggal) {
                    $query->whereDate('tanggal', $tanggal);
                } else {
                    $query->whereDate('tanggal', '>=', Carbon::now());
                }
            })
            ->orderBy('tanggal')
            ->get();
        $informasi = Informasi::latest()->get();

        return view('pages/landing/home', compact([
            'informasi',
            'pemesanan',
            'tanggal',
        ]));
    }
    // Akhir landing page

    // Awal Admin
    function bagianInformasi()
    {
        return view('pages/dashboard/admin/bagianInformasi/bagianInformasi');
    }

    function bagianWaktu()
    {
        return view('pages/dashboard/admin/bagianWaktu/bagianWaktu');
    }

    function bagianPermintaan()
    {
        return view('pages/dashboard/admin/bagianPermintaan/bagianPermintaan');
    }
    function bagianPermintaan2()
    {
        return view('pages/dashboard/admin/bagianPermintaan/bagianPermintaan2');
    }

    function bagianRiwayat()
    {
        return view('pages/dashboard/admin/bagianRiwayat/bagianRiwayat');
    }
    function lihatRiwayat()
    {
        return view('pages/dashboard/admin/bagianRiwayat/lihatRiwayat');
    }
    // Akhir Admin

    // Awal User
    function userPemesanan()
    {
        return view('pages/dashboard/user/userPemesanan');
    }

    function userWaktu()
    {
        return view('pages/dashboard/user/userWaktu');
    }

    function userPembayaran()
    {
        return view('pages/dashboard/user/userPembayaran');
    }

    function userSelesai()
    {
        return view('pages/dashboard/user/userSelesai');
    }
    // Akhir User
}
