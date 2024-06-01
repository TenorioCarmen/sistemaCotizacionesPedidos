<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adelanto extends Model
{
    use HasFactory;

     //Relacion uno a muchos inversa

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

}
