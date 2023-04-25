<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Paleta de Colores -->
    <!-- prim: #e95f4a
         secu: #8661c1
         whte: #ecf0f1 
         blck: #050505 -->

</head>
<body class="font-[Poppins] h-screen">
    <x-navbarAuth></x-navbarAuth>

    <section class="bg-[url('{{asset("/img/Rancho3_darked.jpg")}}')]  bg-cover bg-center h-screen py-4 md:px-24 px-4">
    
        
            <div class='flex md:flex-row flex-col gap-5 pt-20 text-align-center'>
                <div class='flex-1'>
                    <h1 class='text-base md:text-5xl text-white font-semibold tracking-wide md:leading-tight 
                    leading-snug'>Alquila propiedades de manera fácil y sencilla.</h1>
                    <p class='text-terc text-white font-semibold md:w-2/3 md:py-4 py-2 my-5 leading-relaxed'>
                        Belle-Vie, el alquiler como nunca antes.
                    </p>
                    <br />
                    <div class='flex md:gap-4 gap-2 flex-wrap'>
                        <ul class="flex gap-6">
                            <li> <a href=""><button class="text-white border-6 rounded-full px-5 py-2 bg-[#e95f4a]">Inicia Sesión</button></a> </li>
                            <li> <a href=""><button class="text-white border-6 rounded-full px-5 py-2 bg-[#e95f4a]">Registrate</button></a> </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class='flex-1 flex justify-center py-1'>
                    <img src={{asset("/img/Rancho2.jpg")}} alt="hero" class='h-3/5'/>
                </div> --}}
            </div>
        </section>

</body>
</html>