<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  {{-- Styles --}}
  <link rel="stylesheet" href="{{ asset('css/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">


  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  @include('components.navbar')
  <main>
    {{ $slot }}
  </main>
  @include('components.footer')
  @stack('scripts')
</body>

</html>
