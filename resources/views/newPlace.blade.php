@extends('layout.AppLayout') @section('title') Nuevo rancho @endsection

@section('content')
<x-navbar />

<div class="min-h-screen p-5 bg-[#ecf0f1]">
    <p class="font-bold text-lg scroll-smooth text-prim divide-solid text-center">Creando nuevo rancho</p>

    <form action="{{ route('place.store', $user) }}" method="POST" enctype='multipart/form-data' class="py-5" id="newPlace">
        @csrf
        <p class="font-bold text-lg scroll-smooth text-secu divide-solid">Imagen del rancho:</p>
        <hr class="border-prim sm:mx-auto dark:border-prim mt-1"/>

        <x-imageUpload />

        <x-errors />

        <p class="font-bold text-lg scroll-smooth text-secu divide-solid">Información general:</p>
        <hr class="border-prim sm:mx-auto dark:border-prim mt-1"/>

        <div class="input-edit flex-col flex justify-center py-5 px-10">
            <p class="font-bold text-md scroll-smooth text-secu divide-solid">Nombre del rancho:</p>
            <input type="text" name="place_name" class="session-input text-sm"> 
        </div>

        <div class="input-edit flex-col flex justify-center py-5 px-10">
            <p class="font-bold text-md scroll-smooth text-secu divide-solid">Ubicación:</p>
            <x-selectInput />
        </div>

        <div class="input-edit flex-col flex justify-center py-5 px-10">
            <p class="font-bold text-md scroll-smooth text-secu divide-solid">Precio:</p>
            <input type="number" name="price" class="session-input text-sm" step=".01" placeholder="$23.00"> 
        </div>

        <div class="input-edit flex-col flex justify-center py-5 px-10">
            <p class="font-bold text-md scroll-smooth text-secu divide-solid">Descripción:</p>
            <textarea name="description" id="description" cols="30" rows="5" form="newPlace" class="session-input text-sm" maxlength="300"></textarea> 
        </div>

        <div class="input-edit flex justify-center py-5">
            <input type="submit" value="Crear rancho" class="text-white rounded-md text-sm p-2 bg-[#f87171]"> 
        </div>
    </form>
</div>
@endsection