@extends('layout.AppLayout') @section('title') {{ $place->place_name }} @endsection
  
@section('content')

<x-navbar />
<div class="min-h-screen bg-[#ecf0f1]">
    <section class="bg-[url('{{ asset('storage') . '/place/' . $place->img }}')] bg-cover bg-center h-80 py-4 md:px-0 text-center relative overflow-hidden">
        <div id="fade" class="max-w-xs bg-white drop-shadow-lg overflow-hidden md:max-w-md gap-6 opacity-0 translate-x-5 transition duration-1000 aos-item absolute inset-x-0 bottom-5 sm:max-w-sm no-scroll-x" data-aos="fade-left">
        <div class="flex items-center px-2 py-2">
            <div class="w-1/3">
            <img class="h-38 object-cover xs:w-40 rounded-full" src="{{ asset('storage') . '/pfp/' . $user->profile_pic }}" alt="Rancho 1">
            </div>
                <div class="w-2/3">
                    <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold">{{ $user_fn }}</div>
                    <p class="mt-2 p-2 text-slate-500">Propietario</p>
                </div>
            </div>
        </div>
    </section>

    <div class="p-8 flex flex-col items-center justify-center font-semibold">
        <div class="tracking-wide text-center text-2xl  text-[#e95f4a]">{{ $place->place_name }}</div>
    </div>

    <x-errors />

    <form action="{{ route('place.edit.store', $place) }}" method="POST" enctype='multipart/form-data' class="p-5" id="editPlace">
        @csrf
        <p class="font-bold text-lg scroll-smooth text-secu divide-solid">Actualizar imagen de rancho:</p>
        <hr class="border-prim sm:mx-auto dark:border-prim mt-1"/>

        <x-imageUpload />

        <p class="font-bold text-xl scroll-smooth text-secu divide-solid">Editar información del rancho:</p>
        <hr class="border-prim sm:mx-auto dark:border-prim mt-1" />

        <div class="input-edit flex-col flex justify-center py-5 px-5">
            <p class="font-bold text-md scroll-smooth text-secu divide-solid">Nombre del rancho:</p>
            <input type="text" name="place_name" class="session-input text-sm" placeholder="{{ $place->place_name }}"> 
        </div>

        <div class="input-edit flex-col flex justify-center py-5 px-5">
            <p class="font-bold text-md scroll-smooth text-secu divide-solid">Precio:</p>
            <input type="number" name="price" class="session-input text-sm" step=".01" placeholder="{{ sprintf('%0.2f', $place->price) }}"> 
        </div>

        <div class="input-edit flex-col flex justify-center py-5 px-5">
            <p class="font-bold text-md scroll-smooth text-secu divide-solid">Descripción:</p>
            <textarea name="description" id="description" cols="30" rows="5" form="editPlace" class="session-input text-sm" maxlength="300"></textarea> 
        </div>

        <div class="input-edit flex justify-center py-5">
            <input type="submit" value="Guardar cambios" class="text-white rounded-md text-sm p-2 bg-[#f87171]"> 
        </div>
    </form>
</div>



<script>
    AOS.init({
        duration: 1000, // duración de la animación (en milisegundos)
        offset: 200, // offset desde el borde superior de la ventana (en píxeles)
    });
</script>
@endsection