@extends('layout.AppLayout') @section('title') Inicio de sesión @endsection

@section('content')
<x-navbarAuth />

<div class="min-h-screen py-20" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
            <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('{{ asset('img/aside.jpg') }}');">
        </div>
        <div class="w-full lg:w-1/2 py-12 px-12">
            <img src="{{ asset('img/bruh.png') }}" alt="Belle Vie">
            <p class="my-4 text-center">
                Reserva tu rancho ahora y disfruta la naturaleza como nunca antes.
            </p>

            <x-errors /> {{-- Componente que imprime los errores de validación --}}

            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <div class="mt-5">
                    <input type="text" placeholder="Correo electrónico" name="email" class="session-input w-full" value="{{ old('email') }}">
                </div>
                <div class="mt-5">
                    <input type="password" placeholder="Contraseña" name="password" class="session-input w-full">
                </div>
                <div class="mt-5">
                    <button class="w-full bg-prim py-3 text-center text-white">Inicia sesión</button>
                </div>
            </form>

            <section class="text-center">
                <p class="mt-5">¿Aún no tienes cuenta? 
                    <a href="{{asset('register')}}" class="mt-1 text-prim hover:text-indigo-500 transition-all font-bold block">
                        Regístrate ahora
                    </a>
                </p>
            </section>
        </div>
    </div>
</div>
</div>
@endsection