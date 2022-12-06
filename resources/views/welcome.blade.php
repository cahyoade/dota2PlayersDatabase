<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/storage/images/dota2_logo.png" type="image/x-icon">

        <title>Dota 2 players Database</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css'])

    </head>
    <body class="antialiased">
        <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 py-4">
            
            <img src="/storage/images/dota2_logo.png" class="h-36 invert-[.90] mb-8" alt="dota 2 logo">
            <h1 class="text-gray-900 text-3xl font-bold mb-4"><span class="font-medium">Welcome to</span> DOTA 2 Players Database</h1>
            @if (Route::has('login'))
                <div class="px-6 py-4 mb-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-md px-5 py-2 rounded bg-gray-900 text-gray-100 font-bold"> Go To Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-md px-5 py-2 rounded bg-gray-900 text-gray-100 font-bold">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-md px-5 py-2 rounded bg-gray-900 text-gray-100 font-bold">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </body>
</html>
