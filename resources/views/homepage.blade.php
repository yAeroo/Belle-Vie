@extends('layout.AppLayout') @section('title') Bienvenida @endsection
  
@section('content')

    <x-navbarAuth></x-navbarAuth>

    <section class="bg-[url('{{asset("/img/Rancho3_darked.jpg")}}')] bg-cover bg-center h-screen py-4 md:px-24 px-4 content-center text-center">
    
        
            <div class='flex md:flex-row flex-col gap-5 my-14 justify-items-center'>
                <div class='flex-1'>
                    <br>
                    <h1 class='text-5xl text-white font-semibold tracking-wide md:leading-tight 
                    leading-snug'>Alquila propiedades de manera fácil y sencilla.</h1>
                    <br>
                    <p class='text-white text-2xl md:py-4 py-2 my-5 leading-relaxed text-center'>
                        Belle Vie, el alquiler como nunca antes.
                    </p>

                    <div class="flex flex-col items-center justify-center my-8">
                      <ul class="flex gap-6">
                        <li>
                          <a href="{{ route('login') }}">
                            <button class="text-white border-6 rounded-full px-5 py-2 bg-[#e95f4a]">Inicia Sesión</button>
                          </a>
                        </li>
                        <li>
                          <a href="{{ route('register') }}">
                            <button class="text-white border-6 rounded-full px-5 py-2 bg-[#e95f4a]">Registrate</button>
                          </a>
                        </li>
                        
                      </ul>
                    </div>
                    
                    

                      
                {{-- </div>
                    <div class='flex-1 flex justify-center py-1'>
                    <img src={{asset("/img/Rancho2.jpg")}} alt="hero" class='h-3/5'/>
                </div>
            </div> --}}

            

        </section>

        <div class="max-w-md bg-white rounded-xl drop-shadow-lg overflow-hidden md:max-w-2xl my-12 gap-6 mx-auto">
          <div class="md:flex">
              <div class="md:shrink-0">
                  <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('img/Rancho1.jpg') }}" alt="Modern building architecture">
              </div>
              <div class="p-8">
                  <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold">¿Quiénes Somos?</div>
                  <p class="mt-2 p-2 text-slate-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis illo eius libero commodi enim error inventore labore. Quasi explicabo nisi labore voluptate quam eaque officia, ipsam, sed, ad illum laudantium!</p>
              </div>
              
          </div>
      </div>

      <div class="max-w-md mx-auto bg-white rounded-xl drop-shadow-lg overflow-hidden md:max-w-2xl my-12 gap-6">
        <div class="md:flex">
            <div class="md:shrink-0">
                <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('img/Rancho3.jpg') }}" alt="Modern building architecture">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold">Misión</div>
                <p class="mt-2 p-2 text-slate-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis illo eius libero commodi enim error inventore labore. Quasi explicabo nisi labore voluptate quam eaque officia, ipsam, sed, ad illum laudantium!</p>
            </div>
            
        </div>
    </div>

    <div class="max-w-md mx-auto bg-white rounded-xl drop-shadow-lg overflow-hidden md:max-w-2xl my-12 gap-6">
      <div class="md:flex">
          <div class="md:shrink-0">
              <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('img/Rancho2.jpg') }}" alt="Modern building architecture">
          </div>
          <div class="p-8">
              <div class="uppercase tracking-wide text-lg  text-[#e95f4a]  font-semibold">Visión</div>
              <p class="mt-2 p-2 text-slate-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis illo eius libero commodi enim error inventore labore. Quasi explicabo nisi labore voluptate quam eaque officia, ipsam, sed, ad illum laudantium!</p>
          </div>
          
      </div>
  </div>

  <script>
    window.addEventListener('scroll', function() {
      const element = document.getElementById('my-section');
      const position = element.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.5;
  
      if (position < screenPosition) {
        const h1 = document.querySelector('h1');
        const p = document.querySelector('p');
        h1.classList.add('opacity-100', 'translate-y-0');
        p.classList.add('opacity-100', 'translate-y-0');
        h1.classList.remove('opacity-0', 'translate-y-5');
        p.classList.remove('opacity-0', 'translate-y-5');
      }
    });
  </script>

@endsection
