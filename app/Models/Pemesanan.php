<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = [
        'no_telpon',
        'nama_pb',
        'email',
        'nama',
        'tanggal',
        'status',
        'waktu_akhir_id',
        'waktu_awal_id',
    ];

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }

    public function waktuAwal()
    {
        return $this->belongsTo(Waktu::class, 'waktu_awal_id');
    }

    public function waktuAkhir()
    {
        return $this->belongsTo(Waktu::class, 'waktu_akhir_id');
    }
}
