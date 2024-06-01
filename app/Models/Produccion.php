<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function producto(){
        return $this->hasMany(Producto::class);
    }
    
    //Relacion muchos a muchos
    public function materiales()
    {
        return $this->belongsToMany(Material::class, 'material_produccion')->withTimestamps();
    }
}
