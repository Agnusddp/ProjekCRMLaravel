<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Pelanggan extends Model
{
    protected $table ="Data_Pelanggan";
    protected $primaryKey ="id_pelanggan";
    protected $fillable = [
        'id_pelanggan','nama','no_hp','alamat','email'
    ];
}
