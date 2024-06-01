<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
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
            'estado' => $this->faker->randomElement(['pendiente', 'entregado', 'facturado']), // Genera un estado aleatorio de la lista proporcionada
            'fecha_entrega_estimada' => $this->faker->date(), // Genera una fecha de entrega estimada aleatoria
            'tipo_envio' => $this->faker->word, // Genera una palabra aleatoria como tipo de envío
            'tiempo_entrega' => $this->faker->word, // Genera una palabra aleatoria como tiempo de entrega
            'cliente_id' => Cliente::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'created_at' => $createdAt = $this->faker->optional()->dateTimeThisYear, // Genera una fecha y hora opcional en el año actual
            'updated_at' => $this->faker->optional()->dateTimeBetween($createdAt, 'now'), // Genera una fecha y hora posterior o igual a created_at
        ];
    }
}
