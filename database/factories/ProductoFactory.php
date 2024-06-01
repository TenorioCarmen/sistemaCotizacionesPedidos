<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
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
            'nombre' => $this->faker->word, // Genera una palabra aleatoria como nombre del producto
            'descripcion' => $this->faker->paragraph, // Genera un párrafo aleatorio como descripción
            'precio_unitario' => $this->faker->randomFloat(2, 0, 1000), // Genera un precio aleatorio con dos decimales
            'talla' => $this->faker->randomElement(['XS', 'S', 'M', 'L', 'XL']), // Genera una talla aleatoria de la lista proporcionada
            'color' => $this->faker->colorName, // Genera un nombre de color aleatorio
            'unidad_medida' => $this->faker->randomElement(['unidad', 'metro']), // Genera una unidad de medida aleatoria
            'genero' => $this->faker->randomElement(['prenda_para_hombre', 'prenda_para_mujer']), // Genera un género aleatorio de la lista proporcionada
            //'image_url'=> 'productos/' .$this->faker->image('public/storage/productos',640,480,null,false),         
            'image_url' => $this->faker->imageUrl(640, 480, 'products', true, 'Faker'), // Imagen de producto realista

            'empresa_id' => Empresa::all()->random()->id, // 
            'categoria_id' => Categoria::all()->random()->id,
            'created_at' => $createdAt = $this->faker->optional()->dateTimeThisYear, // Genera una fecha y hora opcional en el año actual
            'updated_at' => $this->faker->optional()->dateTimeBetween($createdAt, 'now'), // Genera una fecha y hora posterior o igual a created_at
        ];
    }
}
