<?php

namespace App\Http\Controllers;

use App\Models\HapusWaktu;
use App\Models\Pemesanan;
use App\Models\Waktu as ModelsWaktu;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Waktu extends Controller
{
    public function tampilan(Request $request)
    {
        $tanggal = $request->query('tanggal');
        try {
            $tanggal = $tanggal ? Carbon::parse($tanggal) : Carbon::now();
        } catch (\Exception $e) {
            $tanggal = Carbon::now();
        }

        $pemesanan = Pemesanan::whereDate('tanggal', $tanggal)->get();
        $waktu = ModelsWaktu::with([
            'terhapus' => function (HasMany $query) use ($tanggal) {
                $query->whereDate('tanggal', $tanggal);
            }
        ])->orderBy('waktu')->get();

        return view('pages.dashboard.admin.bagianWaktu.bagianWaktu', compact([
            'pemesanan',
            'tanggal',
            'waktu',
        ]))->with('success', 'Berhasil memperbaharui data waktu.');
    }

    public function hapusWaktu(Request $request)
    {
        $validate = $request->validate([
            'tanggal' => 'bail|required|string|date',
            'waktu.*' => 'bail|exists:waktu,id',
            'waktu' => 'bail|array',
        ]);

        if ($validate['waktu']) {
            HapusWaktu::whereDate('tanggal', $validate['tanggal'])->delete();

            foreach ($validate['waktu'] as $item) {
                HapusWaktu::create([
                    'tanggal' => $validate['tanggal'],
                    'waktu_id' => $item
                ]);
            }
        }

        return redirect('/BagianWaktu?tanggal=' . Str::substr($validate['tanggal'], 0, 10))->with('success', 'Berhasil memperbaharui data waktu.');
    }
}
