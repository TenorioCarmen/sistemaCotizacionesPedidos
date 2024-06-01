<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

     //Relacion uno a muchos inversa
     public function material(){
        return $this->hasMany(Material::class);
    }
}
