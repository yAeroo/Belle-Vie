@extends('layout.AppLayout') @section('title') Mis propiedades @endsection

@section('content')
    <x-navbar />

<div class="min-h-screen p-10">
    <p class="font-bold text-lg scroll-smooth text-secu divide-solid">Propiedades de {{ $user_fn }}:</p>
    <hr class="border-prim sm:mx-auto dark:border-prim mt-1 mb-5" />

    <x-errors />
    
    @if ($places->count() == 0)
    <div class="content flex items-center justify-center pt-10">
        <div class="mt-2 mb-5 leading-3">
            <span class="flex justify-center items-center"><x-icon variant='solid' name='home-modern' color='rgb(107 114 128)'/></span>
            <h1 class='font-title text-gray-500 text-2xl font-bold mb-5 anim2 text-center'>
                {{ auth()->user()->name == $user->name ? 'Todavía no tienes ranchos disponibles' : 'Todavía no hay ranchos disponibles' }}
            </h1>
        </div>
    </div>
    @else
        <div id="cards-container" class="p-5 lg:px-12">
            
            @foreach ($places as $place)
            <section class="bg-[url('{{ asset('storage') . '/place/' . $place->img }}')] bg-cover bg-center h-80 my-5 py-4 md:px-0 text-center relative rounded-lg">
                    <div id="fade" class="max-w-md bg-white drop-shadow-lg overflow-hidden md:max-w-md gap-6 opacity-0 translate-x-5 transition duration-1000 aos-item absolute inset-x-0 bottom-5 sm:max-w-sm" data-aos="fade-left">
                        <div class="flex items-center justify-center px-2 py-2">
                                <div class="w-2/3">
                                    <div class="uppercase tracking-wide text-lg  text-prim font-semibold">{{ $place->place_name }}</div>
                            </div>
                        </div>
                        <div class="flex justify-between px-5 pb-3">
                            <a href="{{ route('place.edit', $place) }}" class=""><p class="mt-2 p-2 text-white rounded-lg bg-secu">Editar rancho</p></a>
                            <a href="#" class=""><p class="mt-2 p-2 text-white rounded-lg bg-secu">Solicitudes</p></a>
                        </div>

                        <form action="{{ route('place.destroy', $place) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="mx-24 mb-5 p-2 text-white rounded-lg bg-red-500">Eliminar rancho</button>
                        </form>
                    </div>
                </section>
            @endforeach
        </div>
    @endif
    <a href="{{ route('place.new') }}" class=""><p class="mt-5 p-2 text-white rounded-lg text-center bg-secu mx-10">+ Crear rancho</p></a>
</div>

<script>
    AOS.init({
    duration: 1000, // duración de la animación (en milisegundos)
    offset: 200, // offset desde el borde superior de la ventana (en píxeles)
  });
</script>
@endsection