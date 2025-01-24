<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Portal Kerjaya PASB</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        
        {{-- @googlefonts --}}

        <style>
            .starlabel label:after {
                content:" *";
                color: red;}
        </style>
    </head>
    {{-- <body class="font-sans antialiased">     --}}
    <body class="antialiased">

  
  <div class="">
    @yield('content')
  </div>
  
  

        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </body>
</html>
