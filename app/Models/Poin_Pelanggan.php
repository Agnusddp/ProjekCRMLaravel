<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin_Pelanggan extends Model
{
    protected $table ="Poin_Pelanggan";
    protected $primaryKey ="id_poin";
    protected $fillable = [
        'id_poin','nama_pelanggan','id_pelanggan','poin'
    ];
}
