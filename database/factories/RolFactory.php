<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rol>
 */
class RolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        //$nombre_rol= $this->faker->word(20);
        return [
            //
            'nombre_rol' => $this->faker->jobTitle, // Genera un título de trabajo como nombre de rol
            'user_id'=>User::all()->random()->id,
            'created_at' => $createdAt = $this->faker->dateTimeThisYear, // Genera una fecha y hora en el año actual
            'updated_at' => $this->faker->dateTimeBetween($createdAt, 'now'),
        ];
    }
}
