@extends('layout.AppLayout') @section('title') {{ $place->place_name }} @endsection
  
@section('content')
    <x-navbar />

    <section class="bg-[url('{{ asset('storage') . '/place/' . $place->img }}')] bg-cover bg-center h-80 py-4 md:px-0 text-center relative overflow-hidden">
      <div id="fade" class="max-w-xs bg-white drop-shadow-lg overflow-hidden md:max-w-md gap-6 opacity-0 translate-x-5 transition duration-1000 aos-item absolute inset-x-0 bottom-5 sm:max-w-sm no-scroll-x" data-aos="fade-left">
        <div class="flex items-center px-2 py-2">
          <div class="w-1/3">
            <img class="h-38 object-cover xs:w-40 rounded-full" src="{{ asset('storage') . '/pfp/' . $user->profile_pic }}" alt="Rancho 1">
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
        <div class="tracking-wide text-center text-xl  text-black">${{ $place->price }}</div>
        <p class="font-title text-xl text-center font-bold tracking-wide transition-all flex text-gray-500"> 
            <x-icon name='map-pin' variant='solid'/> {{ $place->location }}
        </p>
        <p class="mt-3 p-2 text-slate-500 text-justify">{{ $place->description }}</p>
        @if ($place->owner_id == auth()->user()->id)
          <a href="{{ route('place.edit', $place) }}" class="bg-prim mt-4 text-white py-2 px-2 rounded-lg focus:outline-none transition duration-300 ease-in-out">Editar rancho</a>
        @else
          <a class="bg-prim mt-4 text-white py-2 px-2 rounded-lg focus:outline-none transition duration-300 ease-in-out">Reservar Rancho</a>
        @endif
      </div>
  
      <hr class="border-t border-gray-300 my-8">

      <div class="bg-prim w-screen drop-shadow-lg overflow-hidden my-12">
        <div class="px-6 py-8">
          <div class="uppercase text-white text-shadow font-bold text-lg pb-1 ">Reseñas</div>

          <x-errors />

          @if (auth()->user()->id != $place->owner_id)
            <form action="{{ route('review.store', $place) }}" method="POST">
              @csrf
              <textarea name="review" id="review" cols="30" rows="5" class="session-input resize-none" placeholder="Deja tu comentario"></textarea>
              <button class="bg-secu text-white py-2 px-2 rounded-lg focus:outline-none transition duration-300 ease-in-out">Publicar</button>
            </form>
          @endif

            @if ($reviews->count() != 0)
              @foreach ($reviews as $review)
              <div class="flex px-5 py-6 mt-6 bg-white mx-auto">
                <div class="w-12 absolute">
                  <img class="h-23 object-cover md:w-48 rounded-full" src="{{ asset('storage') . '/pfp/' . $review->getUser($review->user_id)->profile_pic }}" alt="ImgPerfil">
                </div>
                <div class="w-3/1 ml-12">
                  <div class=" tracking-wide text-lg text-[#e95f4a] font-semibold ml-3">{{ Str::title($review->getUser($review->user_id)->username) }} | {{ Str::title($review->getUser($review->user_id)->name).' '.Str::title($review->getUser($review->user_id)->last_name)}}</div>
                  <p class=" p-2 text-slate-500 ml-1 mb-2 text-md tracking-wide text-left">{{ $review->review }}</p>
                  
                  @if ($review->user_id == auth()->user()->id)
                    <form action="{{ route('review.destroy', ['review' => $review]) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button class="bg-prim mt-10 px-5 text-white py-2 basis-0 text-sm rounded-lg focus:outline-none transition flex duration-300 ease-in-out items-center justify-center"><x-icon name="trash" /> Eliminar</button>
                    </form>
                  @endif

                </div>
              </div>
            @endforeach
            @else
              <div class="content flex items-center justify-center pt-10">
                <div class="mt-2 mb-5 leading-3">
                    <span class="flex justify-center items-center"><x-icon variant='solid' name='chat-bubble-bottom-center-text' color='white'/></span>
                    <h1 class='font-title text-white text-2xl font-bold mb-5 anim2 text-center'>
                        Todavía no hay reseñas disponibles
                    </h1>
                </div>
            </div>
            @endif

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
