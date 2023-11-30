<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    public function Clientes(){
        return $this->hasMany(Cliente::class);
    }
    public function Pelicula(){
        return $this->belongsTo(Pelicula::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
