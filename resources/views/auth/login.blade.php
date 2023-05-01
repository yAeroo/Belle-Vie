<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <title>Inicio de sesión | Belle Vie</title>
</head>
<body>
<x-navbarAuth />
    <div class="min-h-screen py-20 mb-40" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
      <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
          <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('{{ asset('img/bg.png') }}');">
          </div>
          <div class="w-full lg:w-1/2 py-16 px-12">
            <h2  class="text-3xl mb-4 font-bold">Belle Vie</h2>
            <p class="mb-4">
              Inicia sesión 
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
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <div class="mt-5">  
                <input type="text" placeholder="Correo electrónico" name="email" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Contraseña" name="password" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <button class="w-full bg-purple-500 py-3 text-center text-white">Inicia sesión</button>
              </div>
    </form>

    <p class="mt-5">¿Aún no tienes cuenta? <a href="{{asset('register')}}" class="mt-4 text-lime-400 hover:text-indigo-500 transition-all font-bold">Regístrate ahora</a></p>
</body>
</html>