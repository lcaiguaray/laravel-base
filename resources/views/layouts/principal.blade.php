<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <title>@yield('title', config('app.name'))</title>

  <meta name="description" content="Movilnet">
  <meta name="author" content="Movilnet">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="Movilnet">
  <meta property="og:site_name" content="Movilnet">
  <meta property="og:description" content="Movilnet">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <!-- Icons -->
  <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
  <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

  @yield('css')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('js')
  
  {{-- Funcionamiento como vite (Al cargar la página, carga el script) - type="module"
    <script type="module" src="{{ asset('js/test.js') }}"></script> --}}
</head>

<body>
  <div class="app">
    <header>
      <a href="{{ route('home') }}">Home</a>
    </header>
    <main>@yield('main')</main>
    <footer>Footer</footer>
  </div>
</body>

</html>
