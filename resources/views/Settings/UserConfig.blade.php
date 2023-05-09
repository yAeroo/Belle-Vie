@extends('layout.AppLayout') @section('title') Ajustes @endsection
@section('css') @vite('resources/css/file-input.css') @endsection

@section('content')
<x-navbar />

<div id="config-cont" class="min-h-screen flex justify-center p-12 bg-[#ecf0f1]">
	<article id="profile-info" class="sm:w-10/12 w-full sm:rounded-t-3xl p-5 pb-10 transition-all flex flex-col">
        <div
            id="profile-pic"
            class="w-full flex justify-center">
            <img
                src="{{ asset('storage') . '/pfp/' . $user->profile_pic }}"
                class=" w-52 h-52 rounded-full transition-all border-secu border-solid border-4"
                alt="profile-pic">

			<div id="edit-bttn" class="relative">
				<button   
					class="absolute top-40 right-2 flex items-center justify-center bg-secu p-2 rounded-full showModal">
					<x-icon name='camera' color='white' variant='solid'/>
				</button>
				
			</div>
			<x-imageWindow :user="$user"/>
        </div>

        <div id="profile-name" class="my-5 mb-14">
            <p class="font-title text-3xl text-center font-bold tracking-wide transition-all">
                {{ $user_fn }}
            </p>
            <p class="font-title text-xl text-center font-bold tracking-wide transition-all text-gray-500"> 
                {{Str::title($user->username)}} · {{ Str::title($user->type) == "User" ? "Usuario" : "Propietario" }}
            </p>
        </div>

		<x-errors />

        <form action="{{ route('config.store', $user) }}" method="POST" enctype='multipart/form-data'> 
            @csrf
            <p class="font-bold text-xl scroll-smooth text-secu divide-solid">Editar información personal:</p>
            <hr class="border-prim sm:mx-auto dark:border-prim mt-1" />

            <div class="edit-info py-2 px-10 w-full">
                <div class="input-edit flex-col flex justify-center py-5">
                    <p class="font-bold text-md scroll-smooth text-secu divide-solid">Correo eléctronico:</p>
                    <input type="email" name="email" placeholder="{{ $user->email }}" class="session-input text-sm"> 
                </div>

                <div class="input-edit flex-col flex justify-center py-5">
                    <p class="font-bold text-md scroll-smooth text-secu divide-solid">Número de teléfono:</p>
                    <input type="text" name="phone_number" placeholder="{{ $user->phone_number == '' ? '1234-5678' : $user->phone_number }}" class="session-input text-sm"> 
                </div>
            </div>

            <p class="font-bold text-xl scroll-smooth text-secu divide-solid">Editar credenciales:</p>
            <hr class="border-prim sm:mx-auto dark:border-prim mt-1" />

            <div class="edit-info py-2 px-10 w-full">
                <div class="input-edit flex-col flex justify-center py-5">
                    <p class="font-bold text-md scroll-smooth text-secu divide-solid">Contraseña actual:</p>
                    <input type="password" name="oldPW" placeholder="" class="session-input text-sm"> 
                </div>

                <div class="input-edit flex-col flex justify-center py-5">
                    <p class="font-bold text-md scroll-smooth text-secu divide-solid">Nueva contraseña:</p>
                    <input type="password" name="newPW"  placeholder="" class="session-input text-sm"> 
                </div>

                <div class="input-edit flex-col flex justify-center py-5">
                    <p class="font-bold text-md scroll-smooth text-secu divide-solid">Confirmar contraseña:</p>
                    <input type="password" name="newPW_confirmation" placeholder="" class="session-input text-sm"> 
                </div>
            </div>

            <div class="input-edit flex justify-center py-5">
                <input type="submit" value="Guardar cambios" class="text-white rounded-md text-sm p-2 bg-[#f87171]"> 
            </div>
        </form>
</div>
@endsection