<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cotizacion>
 */
class CotizacionFactory extends Factory
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
            'descuento' => $this->faker->randomFloat(2, 0, 1000), // Genera un descuento aleatorio con dos decimales entre 0 y 1000
            'iva' => $this->faker->randomFloat(2, 0, 1000), // Genera un IVA aleatorio con dos decimales entre 0 y 1000
            'neto' => $this->faker->randomFloat(2, 0, 1000), // Genera un valor neto aleatorio con dos decimales entre 0 y 1000
            'total_precio_cantidad' => $this->faker->randomFloat(2, 0, 1000), // Genera un total de precio y cantidad aleatorio con dos decimales entre 0 y 1000
            'monto_total' => $this->faker->randomFloat(2, 0, 1000), // Genera un monto total aleatorio con dos decimales entre 0 y 1000
            'estado' => $this->faker->randomElement(['revisar', 'en proceso', 'aceptado', 'rechazado']), // Genera un estado aleatorio de la lista proporcionada
            'fecha_cotizacion' => $this->faker->dateTimeThisYear(), // Genera una fecha y hora de cotización aleatoria dentro del año actual
            'cliente_id' => Cliente::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'created_at' => $createdAt = $this->faker->optional()->dateTimeThisYear, // Genera una fecha y hora opcional en el año actual
            'updated_at' => $this->faker->optional()->dateTimeBetween($createdAt, 'now'), // Genera una fecha y hora posterior o igual a created_at
        ];
    }
}
