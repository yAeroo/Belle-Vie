@extends('layout.AppLayout') @section('title') Bienvenida @endsection
  
@section('content')

    <x-navbarAuth></x-navbarAuth>

    <section class="bg-[url('{{asset("/img/Rancho3_darked.jpg")}}')] bg-cover bg-center h-80 py-4 md:px-0 text-center relative overflow-hidden">
        <div id="fade" class="max-w-md bg-white drop-shadow-lg overflow-hidden md:max-w-md gap-6 opacity-0 translate-x-5 transition duration-1000 aos-item absolute inset-x-0 bottom-5 sm:max-w-sm no-scroll-x" data-aos="fade-left">
          <div class="flex items-center px-2 py-2">
            <div class="w-1/3">
              <img class="h-23 object-cover md:w-48 rounded-full" src="{{ asset('img/example.png') }}" alt="Rancho 1">
            </div>
            <div class="w-2/3">
              <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold">Gregorio Ramirez</div>
              <p class="mt-2 p-2 text-slate-500">Xx_Tilin69_xX</p>
            </div>
          </div>
        </div>
      </section>

      <div class="p-8 flex flex-col items-center justify-center font-semibold">
        <div class="tracking-wide text-2xl  text-[#e95f4a]">Rancho El Pepe</div>
        <p class="mt-3 p-2 text-slate-500 text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis illo eius libero commodi enim error inventore labore. Quasi explicabo nisi labore voluptate quam eaque officia, ipsam, sed, ad illum laudantium!</p>
        <button class="bg-prim mt-4 text-white py-2 px-2 rounded-lg focus:outline-none transition duration-300 ease-in-out">Reservar Rancho</button>
      </div>
  
      <hr class="border-t border-gray-300 my-8">

      <div class="bg-prim w-screen drop-shadow-lg overflow-hidden my-12">
        <div class="px-6 py-8">
          <div class="uppercase text-white text-shadow font-bold text-lg pb-6">Reseñas</div>

            <div class="flex items-center px-4 py-4  bg-white">
              <div class="w-2/3">
                <div class="flex place-items-center">
                  <div class="w-1/1">
                    <img class="h-23 object-cover md:w-48 rounded-full" src="{{ asset('img/example.png') }}" alt="imgPerfil">
                  </div>
                  <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold ml-3">Gregorio Ramirez</div>
                </div>
                <p class="mt-2 p-2 text-slate-500">Emm, el rancho esta bueno we (texto relleno alv texto relleno alv texto relleno alv).</p>
              </div>
            </div>
          
            <div class="flex items-center px-4 py-4 mt-6 bg-white">
              <div class="w-1/3">
                <img class="h-23 object-cover md:w-48 rounded-full" src="{{ asset('img/example.png') }}" alt="ImgPerfil">
              </div>
              <div class="w-2/3">
                <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold">Gregorio Ramirez</div>
                <p class="mt-2 p-2 text-slate-500">Emm, el rancho esta bueno we (texto relleno alv texto relleno alv texto relleno alv).</p>
              </div>
            </div>

            <div class="flex px-4 py-4 mt-6 bg-white mx-auto">
              <div class="w-1/6">
                <img class="h-23 object-cover md:w-48 rounded-full" src="{{ asset('img/example.png') }}" alt="ImgPerfil">
              </div>
              <div class="w-2/3">
                <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold ml-3">Gregorio Ramirez</div>
                <p class="mt-2 p-2 text-slate-500 ml-1 text-md tracking-normal">Emm, el rancho esta bueno we (texto relleno alv texto relleno alv texto relleno alv).</p>
              </div>
            </div>

            <div class="flex px-4 py-4 mt-6 bg-white mx-auto">
              <div class="w-1/6">
                <img class="h-23 object-cover md:w-48 rounded-full" src="{{ asset('img/example.png') }}" alt="ImgPerfil">
              </div>
              <div class="w-2/3">
                <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold ml-3">Gregorio Ramirez</div>
                <p class="mt-2 p-2 text-slate-500 ml-1 text-sm tracking-normal">Emm, el rancho esta bueno we (texto relleno alv texto relleno alv texto relleno alv).</p>
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
