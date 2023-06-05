<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpelanggan extends Model
{
    use HasFactory;
    protected $guarded;
    public function pelanggan(){
        return $this->BelongsTo(Pelanggan::class, 'id_pelanggan');
    }
    public function barang(){
        return $this->BelongsTo(Barang::class, 'id_barang');
    }
    public function pegawai(){
        return $this->BelongsTo(Pegawai::class, 'id_pegawai');
    }
}
