@extends('layout.AppLayout') @section('title') Inicio @endsection

@section('content')
<x-navbar />
<br>    

<section class="relative z-0">
    <div class="max-w-2xl mx-auto relative z-0">
        <div id="default-carousel" class="relative z-0" data-carousel="static">
            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                @foreach ($placesSlide as $place2)
                <div class="hidden duration-700 ease-in-out md:z-0" data-carousel-item>
                    <span class="relative top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl md:z-0">Primer Slide</span>
                    <img src="{{ asset('storage') . '/place/' . $place2->img }}" class="block relative top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 md:z-0" alt="...">
                </div>    
                @endforeach
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
    
    <div class="px-12">
        @foreach ($places as $place)
        <section class="bg-[url('{{ asset('storage') . '/place/' . $place->img }}')] bg-cover bg-center h-60 my-5 py-4 md:px-0 text-center relative rounded-lg">
            <div id="fade" class="max-w-md bg-white drop-shadow-lg overflow-hidden md:max-w-md gap-6 opacity-0 translate-x-5 transition duration-1000 aos-item absolute inset-x-0 bottom-5 sm:max-w-sm" data-aos="fade-left">
                <div class="flex items-center justify-center px-2 py-2">
                        <div class="w-2/3">
                        <div class="uppercase tracking-wide text-lg  text-prim font-semibold">{{ $place->place_name }}</div>
                        <div class="uppercase  font-semibold"> ${{ sprintf('%0.2f', $place->price) }}</div>
                        <p class="font-title text-xl text-center font-bold tracking-wide transition-all flex justify-center items-center text-gray-500"> 
                            <x-icon name='map-pin' variant='solid'/> {{ $place->location }}
                        </p>
                        <a href="{{ route('place.index', $place) }}" class=""><p class="mt-2 p-2 text-white rounded-lg bg-secu">Más información</p></a>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    </div>

@endsection