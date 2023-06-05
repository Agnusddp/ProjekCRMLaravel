<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dp extends Model
{
    protected $table ="dp";
    protected $primaryKey ="id_pegawai";
    public $timestamps = false;
    protected $fillable = [
        'id_pegawai','nama','no_hp','alamat','email'
    ];
}
