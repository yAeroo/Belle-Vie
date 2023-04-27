@extends('layout.AppLayout') @section('title') Ajustes @endsection

@section('content')
<x-navbar />

  <section id="profile settings" class="min-h-screen bg-[url('img/banner.jpg')] bg-cover flex items-end justify-center pt-40 ">
    <article id="profile-info" class=" bg-[#e95f4a] h-[85vh] sm:w-10/12 w-full sm:rounded-t-3xl p-5 shadow-black shadow-lg transition-all flex flex-col">
        <div id="profile-pic" class="w-full flex justify-center" >

            <img
                src="{{ asset('img/Rancho2.jpg') }}"
                class="-mt-28 w-52 h-52 lg:w-60 lg:h-60 rounded-full border-8 border-solid border-white transition-all"
                alt="profile-pic">
        </div>

    <form>
        <div>
            <h1 class="text-4xl font-bold text-white">Account Settings</h1>
        </div>
        <hr>
        <br>
        <div>
            <label for="address" class="text-white font-semibold">Username</label>
            <input
              class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400 "
              type="text"
              name="username"    
              id="username"
            />
            <br><br>
          </div>
          <div class="flex space-x-4">
            <div class="w-1/2">
              <label for="firstname" class="text-white font-semibold">Nombre</label>
              <input
                class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
                type="text"
                name="firstname"
                id="firstname"
              />
            </div>
            <div class="w-1/2">
              <label for="lastname" class="text-white font-semibold">Apellido</label>
              <input
                class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
                type="text"
                name="lastname"
                id="lastname"
              />
            </div>
          </div>
          <br><br>
          <div>
            <label for="address" class="text-white font-semibold">Contraseña</label>
            <input
              class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
              type="password"
              name="password"    
              id="password"
            />
          </div>
          <br>
          <button class="bg-[#8661c1] hover:bg-[#9d6bec] text-white font-bold py-2 px-4 rounded-full bottom-0 right-0 relative">
            Enviar
          </button>
    </form>

    </article>
  </section>
@endsection