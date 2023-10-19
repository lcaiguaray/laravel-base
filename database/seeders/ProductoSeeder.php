<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 100 registros de productos
        Producto::factory(100)->create();

        // Crear producto
        Producto::create([
            'nombre' => 'Producto prueba',
            'precio' => 300.50
        ]);
    }
}
