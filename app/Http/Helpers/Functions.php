<?php

if (!function_exists('transformarTexto')) {
  function transformarTexto(string $texto = '', string $transformacion = 'upper'): string
  {
    switch (strtolower($transformacion)) {
      case 'lower':
        return strtolower($texto);

      case 'upper':
        return strtoupper($texto);

      case 'ucfirst':
        return ucfirst($texto);

      default:
        return '';
    }
  }
}
