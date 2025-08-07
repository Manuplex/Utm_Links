<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="h-screen max-w-screen overflow-hidden">
        <div class="w-screen  h-screen relative bg-gradient-to-b from-cyan-400 to-[#D21A94] opacity-75" id="page">
            <header class="flex w-full ">
                <div class="justify-start w-1/3">
                    <a href="{{route('Home')}}"><img src="" alt="">kadeau</a>
                </div>
                <nav class="w-1/3 flex">
                    <ul class="Links flex justify-between w-6/4">
                        <li class="text-white"><a href="{{route('Dashboard')}}">Dashboard</a></li>
                        <li class="text-white"><a href="{{route('Classement')}}">Classement</a></li>
                        <li class="text-white"><a href="{{route('About')}}">About</a></li>
                    </ul>
                </nav>
                    <div class="nav_buttons flex justify-end w-1/3">
                        <a class="text-white hover:bg-white hover:text-blue-500 bg-blue-500 box-content px-14 ml-auto mr-4 rounded-lg h-14 disabled:opacity-70"
                         href="{{route('Login')}}">Login
                        </a>
                        <a href="{{route('Signup')}}" class="text-white bg-blue-500 box-content px-14 hover:bg-white hover:text-blue-500 rounded-lg h-14 disabled:opacity-70">Signup
                        </a>
                    </div>
            </header>
                    {{ $slot }}
            <footer class="mx-auto absolute bottom-0 left-0 p-4 w-screen flex justify-center h-1/4 bg-gray-100/38 backdrop-blur-md border border-white/50 rounded-lg shadow-[-10px_0px_10px_0px_rgba(0,0,0,0.3)]">

               <p class="md:font-serif">Copyright &copy; 2025</p>
            </footer>
        </div>
        @livewireScripts
    </body>
</html>
