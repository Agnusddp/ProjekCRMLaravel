<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Barang extends Model
{
    protected $table ="Data_Barang";
    protected $primaryKey ="id_barang";
    protected $fillable = [
        'id_barang','nama','stok'
    ];
}
