<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
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
            'nombre' => $this->faker->company, // Genera un nombre de empresa
            'ciudad' => $this->faker->city, // Genera el nombre de una ciudad
            'calle' => $this->faker->streetName, // Genera el nombre de una calle
            'numero' => $this->faker->buildingNumber, // Genera un número de edificio
            'telefono' => $this->faker->phoneNumber, // Genera un número de teléfono
            'email' => $this->faker->unique()->companyEmail, // Genera un email único de empresa
            'created_at' => $createdAt = $this->faker->optional()->dateTimeThisYear, // Genera una fecha y hora opcional en el año actual
            'updated_at' => $this->faker->optional()->dateTimeBetween($createdAt, 'now'), // Genera una fecha y hora posterior o igual a created_at
        ];
    }
}
