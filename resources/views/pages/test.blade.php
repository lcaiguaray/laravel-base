{{-- Directiva para extender o utilizar la estructura base --}}
@extends('layouts.principal')

{{-- Directiva para reemplazar el contenido de un bloque (yield) del extends (layouts) --}}
@section('title', 'Página de prueba')

@section('js')
  @vite('resources/js/pages/test.js')
@endsection

@section('main')
  <h5>Página test</h5>
  <div>Producto Manual:: ID: {{ $producto->id }} - NOMBRE: {{ $producto->nombre }}</div>
  <ul>
    @foreach ($productos as $item)
      <li>ID: {{ $item->id }} - NOMBRE: {{ $item->nombre }}</li>
    @endforeach
  </ul>
@endsection
