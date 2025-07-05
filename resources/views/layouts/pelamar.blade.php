<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    {{-- Ionicons (jika masih dipakai) --}}
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <title>@yield('title', 'Temukan Lowongan Pekerjaan')</title>
</head>
<body class="font-[Poppins] bg-gray-100 text-gray-800">
    @yield('content')
</body>
</html>

<style>
  html {
    scroll-behavior: smooth;
  }
</style>
