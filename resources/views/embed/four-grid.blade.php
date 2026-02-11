<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Embed</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
      html, body { margin: 0; padding: 0; background: transparent; }
    </style>
  </head>

  <body class="bg-transparent">
    {{-- ✅ Alleen dit blok (jouw grid) --}}
    <div class="w-full">
      <div class="max-w-[1400px] mx-auto px-8 py-10 grid grid-cols-4 gap-6">
        <div class="bg-white p-8 rounded-3xl"></div>
        <div class="bg-white p-8 rounded-3xl"></div>
        <div class="bg-white p-8 rounded-3xl"></div>
        <div class="bg-white p-8 rounded-3xl"></div>
      </div>
    </div>
  </body>
</html>
