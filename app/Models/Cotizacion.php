<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    //Relacion muchos a muchos 
    public function pedido()
    {
        return $this->belongsToMany(Pedido::class, 'cotizacion_pedido')
                    ->withTimestamps();
    }

    //Relacion muchos a muchos
    //public function producto(){
    //    return $this->hasMany(Producto::class);
    //}
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_cotizacion')->withTimestamps();
    }

}
