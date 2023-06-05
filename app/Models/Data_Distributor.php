<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Distributor extends Model
{
    protected $table ="Data_Distributor";
    protected $primaryKey ="id_distributor";
    protected $fillable = [
        'id_distributor','nama','no_telp','alamat','email'
    ];
}
