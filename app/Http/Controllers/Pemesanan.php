<?php

namespace App\Http\Controllers;

use App\Mail\HapusPemesanan;
use App\Mail\PembayaranBerhasil;
use App\Models\Pembayaran;
use App\Models\Pemesanan as ModelsPemesanan;
use App\Models\Waktu;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use ZerosDev\TriPay\Callback;
use ZerosDev\TriPay\Client;
use ZerosDev\TriPay\Support\Constant;
use ZerosDev\TriPay\Support\Helper;
use ZerosDev\TriPay\Transaction;

class Pemesanan extends Controller
{
    private $harga = 30000;
    private $pesanError = [
        'before_or_equal' => ':attribute tidak boleh diatas tanggal :date',
        'after_or_equal' => ':attribute tidak boleh dibawah tanggal :date',
        'max' => ':attribute tidak boleh melebihi :max karakter',
        'min' => ':attribute tidak boleh kurang dari :min',
        'exists' => ':attribute tidak dapat ditemukan',
        'date' => ':attribute harus berformat tanggal',
        'email' => ':attribute harus berformat email',
        'array' => ':attribute harus berupa array',
        'string' => ':attribute harus berupa teks',
        'required' => ':attribute wajib diisi',
    ];

    public function tampilanAdminPermintaan(Request $request)
    {
        $tanggal = $request->query('tanggal');
        try {
            $tanggal = $tanggal ? Carbon::parse($tanggal) : null;
        } catch (\Exception $e) {
            $tanggal = null;
        }

        $pemesanan = ModelsPemesanan::with([
            'waktuAkhir',
            'waktuAwal',
        ])->where(function (Builder $query) use ($tanggal) {
            $query->where('status', false)
                ->whereDate('tanggal', '>=', Carbon::now());
            if ($tanggal) {
                $query->whereDate('tanggal', $tanggal);
            }
        })->orderBy('tanggal')->get();

        return view('pages.dashboard.admin.bagianPermintaan.bagianPermintaan', compact([
            'pemesanan',
            'tanggal',
        ]));
    }

    public function tampilanAdminRiwayat(Request $request)
    {
        $tanggal = $request->query('tanggal');
        try {
            $tanggal = $tanggal ? Carbon::parse($tanggal) : null;
        } catch (\Exception $e) {
            $tanggal = null;
        }

        $pemesanan = ModelsPemesanan::with([
            'waktuAkhir',
            'waktuAwal',
        ])->where(function (Builder $query) use ($tanggal) {
            if ($tanggal) {
                $query->whereDate('tanggal', $tanggal);
            }
        })->orderByDesc('tanggal')->get();

        return view('pages.dashboard.admin.bagianRiwayat.bagianRiwayat', compact([
            'pemesanan',
            'tanggal',
        ]));
    }

    public function tampilanAdminDetailPermintaan(Request $request, string $id)
    {
        $pemesanan = ModelsPemesanan::findOrFail($id);

        return view('pages.dashboard.admin.bagianPermintaan.bagianPermintaan2', compact([
            'pemesanan',
        ]));
    }

    public function tampilanAdminDetailRiwayat(Request $request, string $id)
    {
        $pemesanan = ModelsPemesanan::findOrFail($id);

        return view('pages.dashboard.admin.bagianRiwayat.lihatRiwayat', compact([
            'pemesanan',
        ]));
    }

    public function hapusPermintaan(Request $request)
    {
        $validate = $request->validate([
            'id' => 'bail|required|exists:pemesanan,id',
            'pesan' => 'bail|required|string',
        ]);

        $pemesanan = ModelsPemesanan::whereKey($validate['id'])
            ->whereDate('tanggal', '>=', Carbon::now())->firstOrFail();

        try {
            Mail::to($pemesanan->email)->send(new HapusPemesanan([
                ...$pemesanan->toArray(),
                'waktu_selesai' => $pemesanan->waktuAkhir->waktu,
                'waktu_mulai' => $pemesanan->waktuAwal->waktu,
            ]));
        } catch (\Exception $e) {
        }

        $pemesanan->pembayaran()->delete();
        $pemesanan->delete();

        return back();
    }

    public function tampilanBiodata()
    {
        return view('pages.dashboard.user.userPemesanan');
    }

    public function tambahBiodata(Request $request)
    {
        $validate = $request->validate([
            'email' => 'bail|required|string|email|max:255',
            'no_telpon' => 'bail|required|string|max:20',
            'nama_pb' => 'bail|required|string|max:255',
            'nama' => 'bail|required|string|max:255',
        ], $this->pesanError);

        session([
            ...$validate,
            'biodata' => true
        ]);

        return redirect('/UserWaktu');
    }

    public function tampilanWaktu(Request $request)
    {
        if (session('biodata')) {
            $tanggal = $request->query('tanggal');
            try {
                $tanggal = $tanggal ? Carbon::parse($tanggal) : Carbon::now();
            } catch (\Exception $e) {
                $tanggal = Carbon::now();
            }
            if (session('tanggal')) {
                $tanggal = Carbon::parse(session('tanggal'));
            }
            $waktu = Waktu::with([
                'terhapus' => function (HasMany $query) use ($tanggal) {
                    $query->whereDate('tanggal', $tanggal);
                }
            ])->orderBy('waktu')->get();
            $pemesanan = ModelsPemesanan::whereDate('tanggal', $tanggal)->get();

            return view('pages.dashboard.user.userWaktu', compact([
                'pemesanan',
                'tanggal',
                'waktu',
            ]));
        }
        return redirect('/UserPemesanan');
    }

    public function tambahWaktu(Request $request)
    {
        if (session('biodata')) {
            $hariini = Carbon::now();
            $bulandepan = Carbon::now()->setMonth($hariini->format('m') + 1)->format('Y-m-d');
            $hariini = $hariini->format('Y-m-d');

            $validate = $request->validate([
                'tanggal' => "bail|required|string|date|after_or_equal:$hariini|before_or_equal:$bulandepan",
                'waktu' => 'bail|required|array|min:2',
                'waktu.*' => 'bail|exists:waktu,id',
            ], $this->pesanError);

            $waktu = Arr::sort($validate['waktu']);

            foreach ($waktu as $key => $item) {
                if ($waktu[$key + 1] ?? false) {
                    if ((int) $waktu[$key + 1] - (int) $item !== 1) {
                        return back()->withErrors(['waktu' => 'waktu harus berurutan']);
                    }
                    if ($temp = Waktu::find($item)) {
                        if ($temp->terhapus->count()) {
                            return back()->withErrors(['waktu' => 'mohon pilih waktu yang lain']);
                        }
                    }
                }
            }

            $cekAwal = ModelsPemesanan::whereDate('tanggal', $validate['tanggal'])
                ->where('waktu_awal_id', '<=', Arr::first($waktu))
                ->where('waktu_akhir_id', '>=', Arr::first($waktu))
                ->exists();

            $cekAkhir = ModelsPemesanan::whereDate('tanggal', $validate['tanggal'])
                ->where('waktu_awal_id', '<=', Arr::last($waktu))
                ->where('waktu_akhir_id', '>=', Arr::last($waktu))
                ->exists();

            if ($cekAwal || $cekAkhir) {
                return back()->withErrors(['waktu' => 'mohon pilih waktu yang lain']);
            }

            session([
                ...$validate,
                'waktu_raw' => Waktu::findMany($waktu)->pluck('waktu')->toArray(),
                'harga' => (count($waktu) - 1) * $this->harga,
                'waktu' => $waktu,
                'jadwal' => true,
            ]);

            return redirect('/UserPembayaran');
        }
        return redirect('/UserPemesanan');
    }

    public function tampilanPembayaran()
    {
        if (session('jadwal')) {
            return view('pages.dashboard.user.userPembayaran');
        }
        return redirect('/UserWaktu');
    }

    public function tambahTransaksi(Request $request)
    {
        $request->validate([
            'metode' => 'bail|required|string|in:BRIVA,BNIVA,BCAVA'
        ]);

        $cekAwal = ModelsPemesanan::whereDate('tanggal', session('tanggal'))
            ->where('waktu_awal_id', '<=', session('waktu'))
            ->where('waktu_akhir_id', '>=', session('waktu'))
            ->exists();

        $cekAkhir = ModelsPemesanan::whereDate('tanggal', session('tanggal'))
            ->where('waktu_awal_id', '<=', session('waktu'))
            ->where('waktu_akhir_id', '>=', session('waktu'))
            ->exists();

        if (session('jadwal') && !$cekAwal && !$cekAkhir) {

            $merchantCode = env('TRIPAY_MERCHANT_CODE');
            $privateKey = env('TRIPAY_SECRET_KEY');
            $apiKey = env('TRIPAY_API_KEY');
            $mode = Constant::MODE_DEVELOPMENT;

            $client = new Client($merchantCode, $apiKey, $privateKey, $mode);
            $transaksi = new Transaction($client);

            $hasil = $transaksi->addOrderItem('Booking', session('harga'), 1)->create([
                'method' => $request['metode'],
                'merchant_ref' => 'INV-' . time(),
                'customer_name' => session('nama'),
                'customer_email' => session('email'),
                'customer_phone' => session('no_telpon'),
                'expired_time' => Helper::makeTimestamp('6 HOUR'),
            ]);

            $data =  json_decode($hasil->getBody()->getContents(), true);

            if (!$data['success']) {
                return back()->withErrors(['server' => 'Terjadi kesalahan pada pembayaran']);
            }

            DB::beginTransaction();

            try {
                $pemesanan = ModelsPemesanan::create([
                    'no_telpon' => session('no_telpon'),
                    'nama_pb' => session('nama_pb'),
                    'email' => session('email'),
                    'nama' => session('nama'),
                    'tanggal' => session('tanggal'),
                    'waktu_akhir_id' => Arr::last(session('waktu')),
                    'waktu_awal_id' => Arr::first(session('waktu')),
                ]);

                Pembayaran::create([
                    'referensi' => $data['data']['reference'] ?? '1',
                    'status' => $data['data']['status'] ?? '',
                    'harga' => $data['data']['amount'] ?? session('harga'),
                    'keterangan' => json_encode($data),
                    'pemesanan_id' => $pemesanan->id,
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                return back()->withErrors(['server' => 'something went wrong']);
            }
            DB::commit();

            session([
                'email' => null,
                'no_telpon' => null,
                'nama_pb' => null,
                'nama' => null,
                'biodata' => null,
                'tanggal' => null,
                'waktu_raw' => null,
                'harga' => null,
                'waktu' => null,
                'jadwal' => null,
                'pemesanan_id' => $pemesanan->id,
                'metode' => $request['metode'],
                'pembayaran' => $data,
            ]);

            return redirect('/UserSelesai');
        }
        session([
            'tanggal' => null,
            'waktu_raw' => null,
            'harga' => null,
            'waktu' => null,
            'jadwal' => null,
        ]);
        return redirect('/UserWaktu');
    }

    public function tampilanSelesai()
    {
        if (session('pembayaran') && session('pemesanan_id')) {
            $pemesanan = ModelsPemesanan::findOrFail(session('pemesanan_id'));

            return view('pages.dashboard.user.userSelesai', compact('pemesanan'));
        }
        return redirect('/UserPembayaran');
    }

    public function callback()
    {
        $merchantCode = env('TRIPAY_MERCHANT_CODE');
        $privateKey = env('TRIPAY_SECRET_KEY');
        $apiKey = env('TRIPAY_API_KEY');
        $mode = Constant::MODE_DEVELOPMENT;

        $client = new Client($merchantCode, $apiKey, $privateKey, $mode, []);
        $callback = new Callback($client);

        $callback->enableDebug();

        try {
            $callback->validate();
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 400);
        }

        $data = $callback->data();

        $pembayaran = Pembayaran::where('referensi', $data->reference)->first();
        if (!$pembayaran) {
            return response()->json([
                'status' => 'error',
                'message' => 'Transaction not found' . ' ' . $data->reference
            ], 404);
        }

        if ($data->status == 'PAID') {
            $pembayaran->pemesanan()->update(['status' => true]);

            try {
                Mail::to($pembayaran->pemesanan->email)->send(new PembayaranBerhasil([
                    ...$pembayaran->pemesanan->toArray(),
                    'waktu_selesai' => $pembayaran->pemesanan->waktuAkhir->waktu,
                    'waktu_mulai' => $pembayaran->pemesanan->waktuAwal->waktu,
                    'referensi' => $pembayaran->referensi,
                ]));
            } catch (\Exception $e) {
            }
        }

        return response()->json();
    }
}
