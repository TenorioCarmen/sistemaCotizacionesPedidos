<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
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
            'nombre' => $this->faker->name, // Genera un nombre completo
            'ciudad' => $this->faker->city, // Genera el nombre de una ciudad
            'calle' => $this->faker->streetName, // Genera el nombre de una calle
            'numero' => $this->faker->buildingNumber, // Genera un número de edificio
            'telefono' => $this->faker->phoneNumber, // Genera un número de teléfono
            'email' => $this->faker->unique()->safeEmail, // Genera un email único
            'created_at' => $createdAt = $this->faker->dateTimeThisYear, // Genera una fecha y hora en el año actual
            'updated_at' => $this->faker->dateTimeBetween($createdAt, 'now'),
        
        ];
    }
}