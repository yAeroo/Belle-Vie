<!DOCTYPE html>
<html lang="es" id="screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>@yield('title') | Belle Vie</title> {{-- Campo para agregar 'Title' dinámico --}}
    @vite('resources/css/app.css') {{-- Importando CSS para TailwindCSS --}}
    @yield('css', '') @yield('js', '') {{-- ¡OPCIONALES! Campos opcionales para JS y CSS específicos --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" /> {{--Libreria AOS (Animate on Scroll)--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> {{--Libreria AOS (Animate on Scroll)--}}

    <!-- FONTS -->
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">

</head> 

<body class="font-body overflow-x-hidden no-scroll-x">
    @yield('content') {{-- Campo para agregar el propio contenido para la vista --}}

    <x-footer /> {{-- Componente que renderiza el footer de la página --}}

    <script>
        AOS.init({
        duration: 1000, // duración de la animación (en milisegundos)
        offset: 200, // offset desde el borde superior de la ventana (en píxeles)
      });
    </script>
</body>

</html>
