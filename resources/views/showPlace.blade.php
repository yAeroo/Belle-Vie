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

    <br><br><br><br><br><br><br><br><br><br>

      <div class="max-w-md mx-auto bg-white rounded-xl drop-shadow-lg overflow-hidden md:max-w-2xl my-12 gap-6 opacity-0 translate-x-5 transition duration-1000 aos-item no-scroll-x" data-aos="fade-left">
        <div class="md:flex">
            <div class="md:shrink-0">
                <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('img/Rancho3.jpg') }}" alt="Rancho 2">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold">Misión</div>
                <p class="mt-2 p-2 text-slate-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis illo eius libero commodi enim error inventore labore. Quasi explicabo nisi labore voluptate quam eaque officia, ipsam, sed, ad illum laudantium!</p>
            </div>
            
        </div>
    </div>

    <div class="max-w-md mx-auto bg-white rounded-xl drop-shadow-lg overflow-hidden md:max-w-2xl my-12 gap-6 opacity-0 translate-x-5 transition duration-1000 aos-item no-scroll-x" data-aos="fade-left">
      <div class="md:flex">
          <div class="md:shrink-0">
              <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('img/Rancho2.jpg') }}" alt="Rancho 3">
          </div>
          <div class="p-8">
              <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold">Visión</div>
              <p class="mt-2 p-2 text-slate-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis illo eius libero commodi enim error inventore labore. Quasi explicabo nisi labore voluptate quam eaque officia, ipsam, sed, ad illum laudantium!</p>
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
