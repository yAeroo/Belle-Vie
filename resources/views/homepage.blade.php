<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    

    <!-- FONTS -->
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Paleta de Colores -->
    <!-- prim: #e95f4a
         secu: #8661c1
         whte: #ecf0f1 
         blck: #050505 -->

</head>
<body class="font-body h-screen">
    <x-navbarAuth></x-navbarAuth>

    <section class="bg-[url('{{asset("/img/Rancho3_darked.jpg")}}')] bg-cover bg-center h-screen py-4 md:px-24 px-4 content-center text-center">
    
        
            <div class='flex md:flex-row flex-col gap-5 my-14 justify-items-center'>
                <div class='flex-1'>
                    <br>
                    <h1 class='text-5xl text-white font-semibold tracking-wide md:leading-tight 
                    leading-snug'>Alquila propiedades de manera fácil y sencilla.</h1>
                    <br>
                    <p class='text-white text-2xl md:py-4 py-2 my-5 leading-relaxed text-center'>
                        Belle Vie, el alquiler como nunca antes.
                    </p>

                    <div class="flex flex-col items-center justify-center my-8">
                      <ul class="flex gap-6">
                        <li>
                          <a href="{{ route('login') }}">
                            <button class="text-white border-6 rounded-full px-5 py-2 bg-[#e95f4a]">Inicia Sesión</button>
                          </a>
                        </li>
                        <li>
                          <a href="{{ route('register') }}">
                            <button class="text-white border-6 rounded-full px-5 py-2 bg-[#e95f4a]">Registrate</button>
                          </a>
                        </li>
                        
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