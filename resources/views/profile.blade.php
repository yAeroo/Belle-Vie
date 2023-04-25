{{-- ¡OBLIGATORIO! @extends manda a llamar a la plantilla y @section title añade el título que estara presente en la vista --}}
@extends('layout.AppLayout') @section('title') {{ Auth()->user()->username }} @endsection

{{-- Opcionales: Se añaden CSS o JS dedicados a esas vistas en específico --}}
@section('css') @vite('resources/css/SOY UN EJEMPLO.css')  @endsection
@section('js') @vite('resources/js/TAMBIÉN SOY UN EJEMPLO.js')  @endsection

@section('content')  {{-- ¡OBLIGATORIA! Aquí se añadira el contenido de la página --}}
    <h1 class="text-3xl text-indigo-800 ">
        Hola soy un profile 
        pero me ahorraron código 😺
    </h1>
    <img src="{{ asset('img/example.png') }}" alt="Ramírez">
@endsection


