<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tkonsumen extends Model
{
    use HasFactory;
    protected $guarded;
    public function konsumen(){
        return $this->BelongsTo(Konsumen::class, 'id_konsumen');
    }
    public function barang(){
        return $this->BelongsTo(Barang::class, 'id_barang');
    }
    public function pegawai(){
        return $this->BelongsTo(Pegawai::class, 'id_pegawai');
    }
}
