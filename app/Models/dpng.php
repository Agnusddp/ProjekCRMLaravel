<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dpng extends Model
{
    protected $table ="dp";
    protected $primaryKey ="id_penggina";
    protected $fillable = ['id_penggina','username','kata_sandi','alamat','email','nama'];
}
