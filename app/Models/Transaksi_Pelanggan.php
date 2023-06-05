<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_Pelanggan extends Model
{
    protected $table ="Transaksi_Pelanggan";
    protected $primaryKey ="id_transaksi";
    protected $fillable = [
        'id_transaksi','tanggal_transaksi','id_pelanggan','id_barang','jenis_transaksi','id_pegawai'
    ];
}
