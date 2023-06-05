<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $guarded;
    // protected $table ="Pengguna";
    // protected $primaryKey ="id";
    // public $timestamps = false;
    // protected $fillable = [
    //     'id','username','katasandi','email','nama','kategori'
    // ];
}
