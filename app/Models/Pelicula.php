<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    public function Clientes(){
        return $this->hasMany(Cliente::class);
    }
    public function Sala(){
        return $this->hasMany(Sala::class);
    }
}
