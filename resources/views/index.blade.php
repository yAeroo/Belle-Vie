<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio | Belle Vie</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#ECF0F1]">
<x-navbar></x-navbar>

<br>    

<section class="relative z-0">
    <div class="max-w-2xl mx-auto relative z-0">
        <div id="default-carousel" class="relative z-0" data-carousel="static">
            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <div class="hidden duration-700 ease-in-out md:z-0" data-carousel-item>
                    <span class="relative top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl md:z-0">Primer Slide</span>
                    <img src="{{ asset('img/Rancho2.jpg') }}" class="block relative top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 md:z-0" alt="...">
                </div>    
                <div class="hidden duration-700 ease-in-out md:z-0" data-carousel-item>
                    <img src="{{ asset('img/Rancho1.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 md:z-0" alt="...">
                </div>    
                <div class="hidden duration-700 ease-in-out md:z-0" data-carousel-item>
                    <img src="{{ asset('img/Rancho2.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 md:z-0" alt="...">
                </div>
            </div>
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2 md:z-0">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="hidden">Anterior</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="hidden">Siguiente</span>
                </span>
            </button>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
</section>



<br>

    <h2 class="text-2xl font-bold tracking-tight text-[#E95F4A] flex items-center justify-center">Recientemente Agregados</h2>
    <br>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="md:flex">
            <div class="md:shrink-0">
                <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('img/Rancho1.jpg') }}" alt="Modern building architecture">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm  text-[#050505]  font-semibold">Rancho en Lomas Altas</div>
                <p class="mt-2 p-2 text-slate-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis illo eius libero commodi enim error inventore labore. Quasi explicabo nisi labore voluptate quam eaque officia, ipsam, sed, ad illum laudantium!</p>
                <button type="button" class="bg-[#E95F4A] text-white p-2 rounded-lg  hover:bg-white hover:text-black  hover:border-gray-300 ">Información</button>
            </div>
            
        </div>
    </div>
    
    <br>

    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="md:flex">
            <div class="md:shrink-0">
            <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('img/Rancho2.jpg') }}" alt="Modern building architecture">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-[#050505] font-semibold">Rancho En Soyapango</div>
                    <p class="mt-2 p-2 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptate architecto nesciunt quo praesentium fuga molestias sint, et consectetur quod accusamus cumque harum placeat rem quia at, distinctio mollitia reprehenderit!</p>
                    <button type="button" class="bg-[#E95F4A] text-white p-2 rounded-lg  hover:bg-white hover:text-black  hover:border-gray-300 ">Información</button>
            </div>
        </div>
    </div>

    <br>

    <hr><hr>
    <h2 class="text-2xl font-bold tracking-tight text-[#E95F4A] flex items-center justify-center">Busca en tu área</h2>
    <br>

    <div class="max-w-md mx-auto md:max-w-2xl flex items-center justify-center  ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496646.2348708033!2d-89.74153659042916!3d13.471095050096896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7ccdfa00775ee3%3A0xf25574d56eb5e13!2sRanchos%20de%20Playa%20MM.!5e0!3m2!1ses-419!2ssv!4v1682185261624!5m2!1ses-419!2ssv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <br>

    
<footer class="bg-[#E95F4A]  shadow  ">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between ">
            <a href="#" class="flex items-center mb-4 sm:mb-0 ">
                <img src="{{ asset('img/favicon.png') }}" class="h-8 mr-3 grid  place-items-center" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white text-center ">Belle Vie</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Sobre Nosotros </a>
                </li>
                
                <li>
                    <a href="https://github.com/yAerosmith/Belle-Vie" class="flex flex-wrap items-center justify-center mr-4 hover:underline md:mr-6">| Respositorio</a>
                </li>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-white sm:text-center ">© 2023 <a href="" class="hover:underline">Belle Vie™</a></span>
    </div>
</footer>
</body>
</html>