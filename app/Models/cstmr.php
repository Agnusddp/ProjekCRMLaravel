<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cstmr extends Model
{
    protected $table ="cstmr";
    protected $primaryKey ="waktu";
    protected $fillable = [
        'waktu'
    ];
}
