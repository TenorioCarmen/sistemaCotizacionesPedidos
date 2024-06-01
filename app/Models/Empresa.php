<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    //Relacion de uno a muchos

    public function producto(){
        return $this->hasMany(Producto::class);
    }
}
