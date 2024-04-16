<!DOCTYPE html>
<html lang="{{ env('APP_LOCALE') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('titlePage')</title>

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-a9GSeG8_.css') }}">
    <script src="{{ asset('build/assets/app-BtUpmekk.js') }}"></script> --}}
    {{-- <link rel="stylesheet" href="../resources/css/app.css">
    <script src="../resources/js/app.js"></script> --}}
    <link rel="stylesheet" href="build/assets/app.css">
    <script src="build/assets/app2.js"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        @hasSection ('header')
        <header class="bg-white shadow">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                @yield('header')
            </div>
        </header>
        @endif

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
