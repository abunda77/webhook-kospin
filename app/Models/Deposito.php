<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    protected $table = 'depositos';

    protected $fillable = [
        'id',
        'id_user',
        'nomor_rekening',
        'nominal_penempatan',
        'jangka_waktu',
        'tanggal_pembukaan',
        'tanggal_jatuh_tempo',
        'rate_bunga',
        'nominal_bunga',
        'status',
        'perpanjangan_otomatis',
        'notes'
    ];

    public $timestamps = true;

    protected $casts = [
        'tanggal_pembukaan' => 'datetime',
        'tanggal_jatuh_tempo' => 'datetime'
    ];
}
