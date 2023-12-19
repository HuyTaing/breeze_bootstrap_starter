<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Breeze Bootstrap 5</title>

  @vite(['resources/js/app.js'])
</head>
<body>
  @include('layouts.partials._header')
  @include('layouts.partials._flash-message')
  
  <main class="container mt-3">
    @yield('content')
  </main>
</body>
</html>