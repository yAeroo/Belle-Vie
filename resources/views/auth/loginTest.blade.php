<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
      <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
          <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('img/example.png');">
          </div>
          <div class="w-full lg:w-1/2 py-16 px-12">
            <h2  class="text-3xl mb-4">LOGIN</h2>
            <p class="mb-4">
              Inicia sesion. 
            </p>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <div class="mt-5">  
                <input type="text" placeholder="email" name="email" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Contraseña" name="password" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <button class="w-full bg-purple-500 py-3 text-center text-white">Inicia Sesion</button>
              </div>
    </form>
</body>
</html>