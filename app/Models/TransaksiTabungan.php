<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiTabungan extends Model
{
    protected $table = 'transaksi_tabungans';

    protected $fillable = [
        'id',
        'id_tabungan',
        'jenis_transaksi',
        'jumlah',
        'tanggal_transaksi',
        'keterangan',
        'kode_transaksi',
        'kode_teller'
    ];

    public $timestamps = true;

    protected $casts = [
        'tanggal_transaksi' => 'datetime',
    ];

}
