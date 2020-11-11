<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>@yield('title', 'Hello City')</title>

    <!-- Fonts -->

    <!-- Styles -->


</head>

<body>

    @yield('content')

    <footer>
        @yield('footer')
    </footer>
</body>
</html>