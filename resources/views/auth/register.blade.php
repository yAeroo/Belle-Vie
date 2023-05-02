@extends('layout.AppLayout') @section('title') Registrate @endsection

@section('css') @vite('resources/css/gender-select.css') @endsection

@section('content')
<x-navbarAuth />

<div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('{{ asset('img/aside.jpg') }}');"></div>
            <div class="w-full lg:w-1/2 py-12 px-12">
                <img src="{{ asset('img/bruh.png') }}" alt="Belle Vie">

                <p class="my-4 text-center">
                    Únete a nuestra comunidad de amantes de la naturaleza y reserva tu rancho ideal hoy mismo.
                </p>
            
                <x-errors /> {{-- Componente que imprime los errores de validación --}}

                <form action="{{ route('register.store') }}" method="post" class="session-form" novalidate>
                    @csrf  
                    <div class="mt-5">
                        <input type="text" placeholder="Usuario" name="username" class="session-input w-full" value="{{ old('username') }}">
                    </div>

                    <div class="grid grid-cols-2 gap-5 mt-5">
                        <input type="text" placeholder="Nombre" name="name" class="session-input" value="{{ old('name') }}">
                        <input type="text" placeholder="Apellido" name="last_name" class="session-input" value="{{ old('last_name') }}">
                    </div>

                    <div class="mt-5">  
                        <input type="text" placeholder="Correo electrónico" name="email" class="session-input w-full">
                    </div>

                    <div class="mt-5">
                        <input type="password" placeholder="Contraseña" name="password" class="session-input">
                    </div>

                    <div class="mt-5">
                        <input type="password" placeholder="Confirmar contraseña" name="password_confirmation"class="session-input w-full">
                    </div>

                    <div class="gender-container mt-5">
                        <label class="font-title font-bold text-xl">Género:</label>

                        <div class="gender-style flex items-center justify-center mt-3 border-r-0">

                            <div class="rad-cont">
                                <input type="radio" name="gender" value="M" class='radio' id="M" />
                                <label class="gender-input rounded-l-md" for="M">
                                    <span><img src="{{ asset('img/mIcon.png') }}"></span>
                                </label>
                            </div>
                            <div class="rad-cont">
                                <input type="radio" name="gender" value="F" class='radio'id='F' />

                                <label class="gender-input rounded-r-md" for="F">
                                    <span><img src="{{ asset('img/fIcon.png') }}"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h4 class="font-title font-bold text-xl">Rol:</h4>
                        <select name="type" id="type" class="session-input w-full">
                        <option value="" class="text-white session-input">Selecciona el tipo de cuenta</option>
                        <option value="user" class="border border-gray-800 py-1 px-2 w-full">Usuario</option>
                        <option value="owner" class="border border-gray-800 py-1 px-2 w-full" >Dueño</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <input type='submit' class="w-full py-3 text-center text-white bg-[#f87171]" value="Registrate ahora">
                    </div>
                </form>

                <p class="mt-5 text-center">¿Ya tienes cuenta? 
                    <a href="{{asset('login')}}" class="text-prim hover:text-indigo-500 block transition-all font-bold">
                        Inicia sesión
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection