<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Style (Optional) -->
    <style>
        body {
            background-color: #f0fdf4; /* soft green background */
        }
    </style>
</head>
<body class="font-sans antialiased bg-green-50 min-h-screen flex flex-col text-green-900">
    {{-- Navigation --}}
    @include('layouts.navigation')

    {{-- Header --}}
    @isset($header)
        <header class="bg-white shadow-md border-b border-green-200">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-2xl font-semibold text-green-800">
                    {{ $header }}
                </h1>
            </div>
        </header>
    @endisset

    {{-- Main Content --}}
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white p-6 rounded-xl shadow-lg border border-green-100 transition duration-300">
            {{ $slot }}
        </div>
    </main>

   {{-- Footer --}}
<footer class="bg-green-100 border-t border-green-200 mt-auto py-4 text-center text-sm text-green-700">
    &copy; {{ date('Y') }} <strong>Petualang ID</strong>. All rights reserved.
</footer>
</body>
</html>
