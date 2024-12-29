<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiPinjaman extends Model
{
    protected $table = 'transaksi_pinjamans';

    protected $fillable = [
        'id',
        'tanggal_pembayaran',
        'pinjaman_id',
        'angsuran_pokok',
        'angsuran_bunga',
        'total_pembayaran',
        'sisa_pinjaman',
        'status_pembayaran',
        'denda',
        'hari_terlambat',
        'angsuran_ke'
    ];

    public $timestamps = true;

    protected $casts = [
        'tanggal_pembayaran' => 'datetime',
    ];


}
