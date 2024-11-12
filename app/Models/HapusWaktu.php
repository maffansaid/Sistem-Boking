<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HapusWaktu extends Model
{
    use HasFactory;

    protected $table = 'hapus_waktu';

    protected $fillable = [
        'tanggal',
        'waktu_id',
    ];
}
