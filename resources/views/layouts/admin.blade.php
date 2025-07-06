<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="{{ asset('js/tailwind.js') }}"></script>
  <script src="{{ asset('js/alpine.min.js') }}" defer></script>
  <style>
    [x-cloak] {
      display: none !important;
    }

    .page-exit {
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.4s ease-in-out;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>@yield('title', 'Temukan Lowongan Pekerjaan')</title>
</head>

<body class="font-[Poppins] bg-gray-100 text-gray-800">

  <div class="flex h-screen overflow-hidden">
    @include('components.sidebar-admin')

    <main class="flex-1 overflow-y-auto">
      @yield('content')
    </main>
  </div>
</body>

</html>
