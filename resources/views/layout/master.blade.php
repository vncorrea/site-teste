<html lang="pt-BR">
<head>
    <html >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite([ 'resources/sass/app.scss', 'resources/js/app.js',])
    <!-- Styles -->
</head>

<body>
{{--    HEADER--}}
    <header>
        @include('layout.views.header')
    </header>

    @yield('content')

    <footer>
        @include('layout.views.footer')
    </footer>
</body>

