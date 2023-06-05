<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;
    protected $guarded;
    public function pengguna(){
        return $this->BelongsTo(Pengguna::class, 'id_pengguna');
    }
}
