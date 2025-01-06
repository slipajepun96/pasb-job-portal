<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Portal Kerjaya PASB</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <!-- Styles -->
        
        <style>
            .starlabel label:after {
                content:" *";
                color: red;}
        </style>

    </head>
    <body class="font-sans antialiased">

     @if(!Auth::guest())
<nav class="bg-white border-gray-200 shadow-xl">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-xl text-lime-700 font-semibold whitespace-nowrap">Kerjaya PASB</span>
        </a>
        <div class="flex flex-row rounded-lg px-1 ml-1">
            <div class="max-w-screen-xl px-4 py-2 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                        <li>
                            <a href="/dashboard" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Permohonan</a>
                        </li>
                        <li>
                            <a href="/jobs" class="text-gray-900 dark:text-white hover:underline">Jawatan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <form action="{{route('logout')}}" method="POST" class=""> 
                @csrf
                <button type="submit" class="w-full rounded-lg inline-flex px-4 py-2 bg-red-700 hover:bg-red-600 text-white font-medium">Logout <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                </button>
            </form>
        </div>
        {{-- @else  --}}
        {{-- <a href="{{route('login')}}" class="lg:inline-flex lg:w-auto py-2 px-4 m-1 rounded-lg bg-cyan-600  hover:text-black hover:bg-cyan-500 text-sm text-white"><span>Login</span></a> --}}
        @endif
    </div>
  </nav>
  @if(!Auth::guest())
    <nav class="bg-gray-50 dark:bg-gray-700 shadow-xl">
        
    </nav>
    @endif
  
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    </body>
</html>
