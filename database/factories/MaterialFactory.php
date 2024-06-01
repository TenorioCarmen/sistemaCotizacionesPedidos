<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->word, // Genera una palabra aleatoria como nombre del material
            'precio' => $this->faker->randomFloat(2, 0, 1000), // Genera un precio aleatorio con dos decimales
            'unidad_medida' => $this->faker->randomElement(['unidad', 'kg', 'g', 'litro', 'metro']), // Genera una unidad de medida aleatoria
            //'proveedor_id' => \App\Models\Proveedor::factory()->create()->id, // Crea un proveedor y obtiene su ID
            'proveedor_id' => Proveedor::all()->random()->id,
            'created_at' => $createdAt = $this->faker->optional()->dateTimeThisYear, // Genera una fecha y hora opcional en el año actual
            'updated_at' => $this->faker->optional()->dateTimeBetween($createdAt, 'now'), // Genera una fecha y hora posterior o igual a created_at
        ];
    }
}
