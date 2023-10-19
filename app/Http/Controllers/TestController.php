<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // dd() -> var_dump($producto);exit;
        // Buscar un registro -> $producto = Producto::find(60);
        // Obtener todos los productos de la base de datos -> $productos = Producto::all();

        $producto = Producto::orderBy('id', 'desc')->first(); // Obtener el último registro
        $productos = Producto::activos()->orderBy('nombre')->get();
        return view('pages.test', compact('producto', 'productos'));
    }
}
