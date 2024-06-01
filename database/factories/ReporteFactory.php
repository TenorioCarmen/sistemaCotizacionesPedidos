<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reporte>
 */
class ReporteFactory extends Factory
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
            'descripcion' => $this->faker->paragraph, // Genera un párrafo aleatorio como descripción
            'fecha_emision' => $this->faker->date(), // Genera una fecha de emisión aleatoria
            'pedido_id' => Pedido::all()->random()->id,
            'created_at' => $createdAt = $this->faker->optional()->dateTimeThisYear, // Genera una fecha y hora opcional en el año actual
            'updated_at' => $this->faker->optional()->dateTimeBetween($createdAt, 'now'), // Genera una fecha y hora posterior o igual a created_at
        ];   
    }
}
