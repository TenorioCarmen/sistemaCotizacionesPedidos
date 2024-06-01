<?php

namespace Database\Seeders;

use App\Models\Adelanto;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Cotizacion;
use App\Models\Empresa;
use App\Models\Material;
use App\Models\Pedido;
use App\Models\Produccion;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Reporte;
use App\Models\Rol;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
      
        $this->call(UserSeeder::class);
        Rol::factory(10)->create();
        Cliente::factory(10)->create();
        Cotizacion::factory(10)->create();
        Pedido::factory(10)->create();
        Adelanto::factory(10)->create();
        Reporte::factory(10)->create();
        Empresa::factory(10)->create();
        Categoria::factory(10)->create();
        Proveedor::factory(10)->create();
        Material::factory(10)->create();
        Producto::factory(15)->create();
        Produccion::factory(10)->create();
        
    }
}
