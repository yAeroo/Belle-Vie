@extends('layout.AppLayout') @section('title') {{ Str::title($user->username) }} @endsection

@section('content')
<x-navbar />

<section id="profile" class="min-h-screen bg-[url({{ asset('img/profile-banner.png') }})] bg-cover flex items-end justify-center pt-40 ">
    <article id="profile-info" class="bg-white min-h-[80vh] sm:w-10/12 w-full sm:rounded-t-3xl p-5 pb-10 shadow-black shadow-lg transition-all flex flex-col">
        <div
            id="profile-pic"
            class="w-full flex justify-center">
            <img
                src="{{ asset('storage') . '/pfp/' . $user->profile_pic }}"
                class="-mt-28 w-52 h-52 lg:w-60 lg:h-60 rounded-full border-8 border-solid border-white transition-all"
                alt="profile-pic">
        </div>

        @if ($user->id == Auth()->user()->id)
            <div id="edit-bttn" class="relative">
                <a
                    href="{{ route('profile.settings', $user) }}"    
                    class="absolute -top-20 lg:-top-28 left-[85%] md:left-[70%] xl:left-[82%] flex md:w-48 items-center justify-center bg-secu p-2 rounded-full">
                <x-icon name='pencil' color='white' variant='solid'/>
                </a>
            </div>
        @endif

        <div id="profile-name" class="my-5 mb-14">
            <p class="font-title text-3xl md:text-5xl text-center font-bold tracking-wide transition-all">
                {{ $user_fn }}
            </p>
            <p class="font-title text-xl md:text-3xl text-center font-bold tracking-wide transition-all text-gray-500"> 
                {{Str::title($user->username)}} · {{ Str::title($user->type) == "User" ? "Usuario" : "Propietario" }}
            </p>
        </div>

        <div class="personal-info-cont w-full  px-0 md:px-5 lg:px-32">
            <div class="contacts mb-14">
                <p class="font-bold text-lg scroll-smooth text-secu divide-solid">Contactos:</p>
                <hr class="border-prim sm:mx-auto dark:border-prim mt-1"/>

                <ul class="w-full px-5 xl:px-60">
                    <li class="flex justify-between my-4">
                        <div class="flex">
                            <x-icon name='envelope' variant="solid" color="#f87171" class="mx-3"/>
                            <p class="font-bold mx-3">E-mail:</p>
                        </div>
    
                        <p>{{ $user->email }}</p>
                    </li>
    
                @if ($user->phone_number != "")
                    <li class="flex justify-between my-4">
                        <div class="flex">
                            <x-icon name='phone' variant="solid" color="#f87171" class="mx-3"/>
                            <p class="font-bold">Número de teléfono:</p>
                        </div>
    
                        <p>{{ $user->phone_number }}</p>
                    </li>
                @endif
                </ul>
            </div>

            @if ($user->type == 'owner')
                <div class="places">
                    <p class="font-bold text-lg scroll-smooth text-secu divide-solid">Propiedades:</p>
                    <hr class="border-prim sm:mx-auto dark:border-prim  mt-1" />
                    @if ($places->count() == 0)
                        Cero lugares
                    @else
                        <div id="cards-container" class="p-5 lg:px-12">
                            
                            @foreach ($places as $place)
                                <section class="bg-[url('{{asset("/img/Rancho3_darked.jpg")}}')] bg-cover bg-center h-60 py-4 md:px-0 text-center relative rounded-lg">
                                    <div id="fade" class="max-w-md bg-white drop-shadow-lg overflow-hidden md:max-w-md gap-6 opacity-0 translate-x-5 transition duration-1000 aos-item absolute inset-x-0 bottom-5 sm:max-w-sm" data-aos="fade-left">
                                        <div class="flex items-center justify-center px-2 py-2">
                                                <div class="w-2/3">
                                                <div class="uppercase tracking-wide text-lg  text-prim font-semibold">{{ $place->place_name }}</div>
                                                <div class="uppercase  font-semibold"> ${{ $place->price }}</div>
                                                <a href="#" class=""><p class="mt-2 p-2 text-white rounded-lg bg-secu">Más información</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </article>
</section>

<script>
    AOS.init({
    duration: 1000, // duración de la animación (en milisegundos)
    offset: 200, // offset desde el borde superior de la ventana (en píxeles)
  });
</script>
@endsection


