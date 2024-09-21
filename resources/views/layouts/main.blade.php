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


<nav class="bg-white border-gray-200 shadow-xl">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Portal Kerjaya PASB</span>
        </a>
        {{-- <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="/login" type="button" class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Staff Log In</a>
            <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        </div> --}}
        @if(!Auth::guest())
                    <div class="flex flex-row rounded-lg px-1 ml-1">

                                <form action="{{route('logout')}}" method="POST" class=""> @csrf <button type="submit" class="w-full rounded-lg inline-flex px-4 py-2 bg-red-700 hover:bg-red-600 text-white">Logout <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                  </svg></button></form>

                    </div>

                    {{-- end of dropdown demo --}}
                    @else 
                    <a href="{{route('login')}}" class="lg:inline-flex lg:w-auto py-2 px-4 m-1 rounded-lg bg-cyan-600  hover:text-black hover:bg-cyan-500 text-sm text-white"><span>Login</span></a>
                    @endif
    </div>
  </nav>
  @if(!Auth::guest())
    <nav class="bg-gray-50 dark:bg-gray-700 shadow-xl">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="/dashboard" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Dashboard</a>
                    </li>
                    <li>
                        <a href="/jobs" class="text-gray-900 dark:text-white hover:underline">Kerja</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endif
  
        @yield('content')
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

    </body>
</html>
