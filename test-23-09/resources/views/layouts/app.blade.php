<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Pitch Soccer - @yield('title')</title>
    <meta name="description" content="Tienda especializada en equipamiento de fútbol. Botas, camisetas y balones de élite.">
    @vite(['resources/css/app.css'])
</head>
<body>
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
</body>
</html>
