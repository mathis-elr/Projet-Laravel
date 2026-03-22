<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Application covoit')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.header')

    @yield('erreur')
    @yield('header-dashboard')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
