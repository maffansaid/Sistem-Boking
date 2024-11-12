<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waktu extends Model
{
    use HasFactory;

    protected $table = 'waktu';

    protected $fillable = [
        'waktu'
    ];

    public function terhapus()
    {
        return $this->hasMany(HapusWaktu::class);
    }
}
