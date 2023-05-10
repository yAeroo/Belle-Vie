@extends('layout.AppLayout') @section('title') {{ $place->place_name }} @endsection
  
@section('content')

    <x-navbar />

    <section class="bg-[url('{{ asset('storage') . '/place/' . $place->img }}')] bg-cover bg-center h-80 py-4 md:px-0 text-center relative overflow-hidden">
        <div id="fade" class="max-w-md bg-white drop-shadow-lg overflow-hidden md:max-w-md gap-6 opacity-0 translate-x-5 transition duration-1000 aos-item absolute inset-x-0 bottom-5 sm:max-w-sm no-scroll-x" data-aos="fade-left">
          <div class="flex items-center px-2 py-2">
            <div class="w-1/3">
              <img class="h-23 object-cover md:w-48 rounded-full" src="{{ asset('storage') . '/pfp/' . $user->profile_pic }}" alt="Rancho 1">
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
        <p class="mt-3 p-2 text-slate-500 text-justify">{{ $place->description }}</p>
        <button class="bg-prim mt-4 text-white py-2 px-2 rounded-lg focus:outline-none transition duration-300 ease-in-out">Reservar Rancho</button>
      </div>
  
      <hr class="border-t border-gray-300 my-8">

      <div class="bg-prim w-screen drop-shadow-lg overflow-hidden my-12">
        <div class="px-6 py-8">
          <div class="uppercase text-white text-shadow font-bold text-lg pb-1 ">Reseñas</div>

            <div class="flex px-5 py-6 mt-6 bg-white mx-auto">
              <div class="w-12 absolute">
                <img class="h-23 object-cover md:w-48 rounded-full" src="{{ asset('img/catHDpfp.jpg') }}" alt="ImgPerfil">
              </div>
              <div class="w-3/1 ml-12">
                <div class=" tracking-wide text-lg text-[#e95f4a] font-semibold ml-3">ThePianistCat88</div>
                <p class=" p-2 text-slate-500 ml-1 text-md tracking-wide text-left">El rancho cuenta con instalaciones de primera clase para criar y mantener ganado, así como para la agricultura y la producción de alimentos.</p>
              </div>
            </div>

            <div class="flex px-5 py-6 mt-6 bg-white mx-auto">
              <div class="w-12 absolute">
                <img class="h-23 object-cover md:w-48 rounded-full" src="{{ asset('img/example.png') }}" alt="ImgPerfil">
              </div>
              <div class="w-3/1 ml-12">
                <div class=" tracking-wide text-lg text-[#e95f4a] font-semibold ml-3">xGato_weon_69</div>
                <p class=" p-2 text-slate-500 ml-1 text-md tracking-wide text-left">Ermano tenei el meo rancho recomendadisimo 10/10</p>
              </div>
            </div>
          
            

          </div>
        </div>
      </div>
      
      
      

  <script>
    AOS.init({
    duration: 1000, // duración de la animación (en milisegundos)
    offset: 200, // offset desde el borde superior de la ventana (en píxeles)
  });
  </script>

@endsection
