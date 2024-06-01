<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

     //Relacion uno a muchos
    
     public function pedido(){
        return $this->hasMany(Pedido::class);
    }

    public function cotizacion(){
        return $this->hasMany(Cotizacion::class);

    }

    public function adelanto(){
        return $this->hasMany(Adelanto::class);
    }
}
