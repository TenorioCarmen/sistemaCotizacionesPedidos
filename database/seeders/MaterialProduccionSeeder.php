<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;
use App\Models\Produccion;


class MaterialProduccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los materiales y producciones existentes
        $materiales = Material::all();
        $producciones = Produccion::all();

        // Asignar materiales a producciones
        $producciones->each(function ($produccion) use ($materiales) {
            // Asignar entre 1 y 5 materiales aleatorios a cada produccion
            $materialesAleatorios = $materiales->random(rand(1, 5));
            foreach ($materialesAleatorios as $material) {
                $produccion->materiales()->attach($material->id, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }
}
