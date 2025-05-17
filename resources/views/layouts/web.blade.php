<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servicos FIS-UNCP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="sistemas,ideas, fis, uncp, website, fis-uncp, ingenieria de sistemas" name="keywords">
    <meta
        content="Portal de servicios de la Facultad de Ingenieria de Sistemas de la Universidad Nacional del Centro del Perú"
        name="description">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('/css/web.css') }}">
    @yield('extra-head')
</head>
<body class="w-full min-h-dvh">
    @yield('body')
    @yield('extra-footer')
</body>
</html>
