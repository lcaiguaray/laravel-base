<?php

namespace Database\Factories;

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
        // Retornar por cada campo que data tendrá
        return [
            'nombre' => fake()->name(),
            'precio' => fake()->randomFloat(4, 0, 999999), // 123456.1234
            'activo' => fake()->numberBetween(0, 1)
        ];
    }
}
