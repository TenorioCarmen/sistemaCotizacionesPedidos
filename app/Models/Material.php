<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

     //Relacion uno a muchos
    public function proveedor(){
        return $this->hasMany(Proveedor::class);
    }

    //Relacion muchos a muchos
    public function producciones()
    {
        return $this->belongsToMany(Produccion::class, 'material_produccion')->withTimestamps();
    }
}
