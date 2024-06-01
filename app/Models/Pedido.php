<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    //Relacion uno a muchos
    public function adelanto(){
        return $this->hasMany(Adelanto::class);
    }
    

    //Relacion muchos a muchos 
    //public function cotizacion(){
    //    return  $this->belongsTo(Cotizacion::class);
    //}
    public function cotizacion()
    {
        return $this->belongsToMany(Cotizacion::class, 'cotizacion_pedido')
                    ->withTimestamps();
    }

  
    
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_pedido')->withTimestamps();
    }

    //relacion uno a uno
    public function reporte(){
        return  $this->belongsTo(Reporte::class);
    }
}
