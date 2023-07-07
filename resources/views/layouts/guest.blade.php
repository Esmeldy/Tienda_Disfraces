<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Disfrazado') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap iconos-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Scripts -->
    {{-- @vite('resources/sass/app.css' ,'resources/js/app.js') --}}
{{-- </head> --}}
<x-head />
<body>
    <x-navbar />
    <div class="row d-flex justify-content-center mt-5 mb-5" style="min-height: 80vh;">
        <div class="form form-group">
            <a href="/">
                <x-application-logo class="" />
            </a>
        </div>

        <div class="">
            {{ $slot }}
        </div>
    </div>
    <x-footer />
</body>

</html>
