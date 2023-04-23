<!DOCTYPE html>
<html lang="es" id="screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Belle Vie</title> {{-- Campo para agregar 'Title' dinámico --}}
    @vite('resources/css/app.css') {{-- Importando CSS para TailwindCSS --}}
    @yield('css', '') @yield('js', '') {{-- ¡OPCIONALES! Campos opcionales para JS y CSS específicos --}}
</head> 

<body>
    @yield('content') {{-- Campo para agregar el propio contenido para la vista --}}
</body>

</html>
