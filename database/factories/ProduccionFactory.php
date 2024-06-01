<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produccion>
 */
class ProduccionFactory extends Factory
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
            'cantidad_material' => $this->faker->randomFloat(2, 0, 1000), // Genera una cantidad de material aleatoria con dos decimales
            'costo_prod' => $this->faker->randomFloat(2, 0, 1000), // Genera un costo de producción aleatorio con dos decimales
            'fecha_prod' => $this->faker->date(), // Genera una fecha de producción aleatoria
            'producto_id' =>Producto::all()->random()->id,
            'created_at' => $createdAt = $this->faker->optional()->dateTimeThisYear, // Genera una fecha y hora opcional en el año actual
            'updated_at' => $this->faker->optional()->dateTimeBetween($createdAt, 'now'), // Genera una fecha y hora posterior o igual a created_at
        ];
    }
}
