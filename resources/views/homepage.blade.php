<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perú</title>
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
    <header class="bg-[#f87171]">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <a href="/">
                    <img class="w-16 cursor-pointer mx-2 my-2" src="img/favicon.png" alt="...">
                </a>
            </div>
            <div
                class="nav-links ml-auto duration-500 md:static absolute bg-[#f87171] md:min-h-fit min-h-[15vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-gray-50">
                    <li>
                        <a class="hover:text-gray-200" href="#">Iniciar Sesión</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-200 " href="#">Registrarse</a>
                    </li>

                </ul>
            </div>
            <div class="flex items-center gap-6 sm:gap-[1.75rem] ">
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>



    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>
</html>