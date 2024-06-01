<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Pedido;

class ProductoPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los productos y pedidos existentes
        $productos = Producto::all();
        $pedidos = Pedido::all();

        // Asignar productos a pedidos
        $pedidos->each(function ($pedido) use ($productos) {
            // Asignar entre 1 y 5 productos aleatorios a cada pedido
            $productosAleatorios = $productos->random(rand(1, 5));
            foreach ($productosAleatorios as $producto) {
                $cantidad = rand(1, 100); // Generar una cantidad aleatoria
                $pedido->productos()->attach($producto->id, [
                    'cantidad' => $cantidad,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }
}
