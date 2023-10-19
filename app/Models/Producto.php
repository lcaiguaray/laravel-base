<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'productos';

    // Campos de la tabla
    protected $fillable = [
        'nombre',
        'precio',
        'activo'
    ];

    // Formatear los atributos
    protected $casts = [
        'activo' => 'boolean'
    ];

    // Scopes
    // Funciones para reutilizar consultas
    public function scopeActivos($query)
    {
        return $query->where('activo', true);
    }
}
