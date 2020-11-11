<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>@yield('title', config('app.name') )</title>

    <!-- Fonts -->

    <!-- Styles -->


</head>

<body>

    @yield('content')

    {{ config('project.variable') }}

    <footer>
            <p>&copy; Copyright {{ date('Y') }} &middot; </p>

            @if( ! \Illuminate\Support\Facades\Route::is('about'))
            <p><a href="{{ route('about') }}">About Us</a></p>
            @endif
    </footer>
</body>
</html>
