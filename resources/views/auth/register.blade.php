<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')

    <title>Regístrate | Belle Vie</title>
</head>
<body>
<x-navbarAuth />
    <div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
      <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
          <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('{{ asset('img/bg.png') }}');">
          </div>
          <div class="w-full lg:w-1/2 py-16 px-12">
            <h2  class="text-3xl mb-4 font-bold text-center">Belle Vie</h2>
            <p class="mb-4">
              Crea una cuenta
            </p>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                  <form action="{{ route('register.store') }}" method="post" class="session-form" novalidate>
                  @csrf  
                  <div class="mt-5">
                <input type="text" placeholder="Usuario" name="username" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <br>
              <div class="grid grid-cols-2 gap-5">
                <input type="text" placeholder="Nombre" name="name" class="border border-gray-400 py-1 px-2">
                <input type="text" placeholder="Apellido" name="last_name" class="border border-gray-400 py-1 px-2">
              </div>
              <div class="mt-5">  
                <input type="text" placeholder="Correo electrónico" name="email" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Contraseña" name="password" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Confirmar contraseña" name="password_confirmation"class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
              <h4>Género:</h4> 
              <input type="radio"  name="gender" id="F" value="F" class="mt-px cursor-pointer select-none font-light text-gray-700">F
                <input type="radio"  name="gender" id="M" value="M" class="border border-gray-400">M
              </div>
              <br>
              <div class="mt-5">
                <select name="type" id="type" class="order border-gray-100 py-1 px-2 w-full">
                  <option value="user" class="order border-gray-800 py-1 px-2 w-full">Usuario</option>
                  <option value="owner" class="order border-gray-800 py-1 px-2 w-full" >Dueño</option>
                </select>
              </div>
              <div class="mt-5">
                <input type='submit' class="w-full bg-purple-500 py-3 text-center text-white" value="Registrate ahora">
              </div>
            </form>

            <p class="mt-5">¿Ya tienes cuenta? <a href="{{asset('register')}}" class="mt-4 text-lime-400 hover:text-indigo-500 transition-all font-bold">Inicia sesión</a></p>
          </div>
        </div>
      </div>
    </div>
  </body>        
</html>