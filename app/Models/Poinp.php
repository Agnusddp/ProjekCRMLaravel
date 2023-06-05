<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poinp extends Model
{
    use HasFactory;
    protected $guarded;
    public function Pelanggan(){
        return $this->BelongsTo(Pelanggan::class, 'id_pelanggan');
    }
}
