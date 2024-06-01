<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adelanto>
 */
class AdelantoFactory extends Factory
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
            'monto' => $this->faker->randomFloat(2, 0, 1000), // Genera un monto aleatorio con dos decimales entre 0 y 1000
            'es_adelanto' => $this->faker->boolean, // Genera un valor booleano aleatorio
            'terminos_pago' => $this->faker->sentence, // Genera una frase aleatoria como términos de pago
            'forma_pago' => $this->faker->randomElement(['Efectivo', 'Transferencia', 'Tarjeta']), // Genera una forma de pago aleatoria de la lista proporcionada
            'fecha_pago' => $this->faker->optional()->date(), // Genera una fecha de pago aleatoria opcional
            'pedido_id' => Pedido::all()->random()->id,
            'cliente_id' => Cliente::all()->random()->id,
            'created_at' => $createdAt = $this->faker->optional()->dateTimeThisYear, // Genera una fecha y hora opcional en el año actual
            'updated_at' => $this->faker->optional()->dateTimeBetween($createdAt, 'now'), // Genera una fecha y hora posterior o igual a created_at
        ];
    }
}
