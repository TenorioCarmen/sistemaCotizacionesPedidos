<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Pedido;
use App\Models\Cotizacion;

class CotizacionPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Obtener todos los pedidos y cotizaciones existentes
        $pedidos = Pedido::all();
        $cotizaciones = Cotizacion::all();

        // Asignar cotizaciones a pedidos
        $pedidos->each(function ($pedido) use ($cotizaciones) {
            // Asignar entre 1 y 3 cotizaciones aleatorias a cada pedido
            $cotizacionesAleatorias = $cotizaciones->random(rand(1, 3))->pluck('id')->toArray();
            foreach ($cotizacionesAleatorias as $cotizacionId) {
                $pedido->cotizacion()->attach($cotizacionId, [
                    'fecha_solicitud_pedido' => now(), // Proveer un valor para fecha_solicitud_pedido
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }
}
