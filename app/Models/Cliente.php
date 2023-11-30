<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public function Pelicula(){
        return $this->belongsTo(Pelicula::class);
    }
    public function Sala(){
        return $this->belongsTo(Sala::class);
    }
}
