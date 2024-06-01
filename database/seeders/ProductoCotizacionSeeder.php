<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Cotizacion;

class ProductoCotizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los productos y cotizaciones existentes
        $productos = Producto::all();
        $cotizaciones = Cotizacion::all();

        // Asignar productos a cotizaciones
        $cotizaciones->each(function ($cotizacion) use ($productos) {
            // Asignar entre 1 y 5 productos aleatorios a cada cotizacion
            $productosAleatorios = $productos->random(rand(1, 5));
            foreach ($productosAleatorios as $producto) {
                $cantidad = rand(1, 100); // Generar una cantidad aleatoria
                $cotizacion->productos()->attach($producto, [
                    'cantidad' => $cantidad,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }
}
