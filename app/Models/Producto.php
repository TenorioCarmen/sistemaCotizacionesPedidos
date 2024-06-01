<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    //Relacion uno a muchos
    public function produccion(){
        return $this->hasMany(Produccion::class);
    }
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'producto_pedido')->withTimestamps();
    }

    //public function cotizacion(){
    //    return  $this->belongsTo(Cotizacion::class);
    //}
    //relacion muchos a muchos
    public function cotizaciones()
    {
        return $this->belongsToMany(Cotizacion::class, 'producto_cotizacion')->withTimestamps();
    }

}
