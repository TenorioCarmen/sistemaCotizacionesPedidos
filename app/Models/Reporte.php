<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    //relacion uno a uno
    public function pedido(){
        return  $this->belongsTo(Pedido::class);
    }
}
