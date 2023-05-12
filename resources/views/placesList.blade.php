@extends('layout.AppLayout') @section('title') Ranchos @endsection

@section('content')
    <x-navbar />

    <div class="min-h-screen p-10">
        <p class="font-bold text-lg scroll-smooth text-secu divide-solid">Propiedades:</p>
        <hr class="border-prim sm:mx-auto dark:border-prim  mt-1" />

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

<script>
    AOS.init({
    duration: 1000, // duración de la animación (en milisegundos)
    offset: 200, // offset desde el borde superior de la ventana (en píxeles)
    });
</script>

@endsection