@extends('layout.AppLayout') @section('title') Ajustes @endsection
@section('css') @vite('resources/css/file-input.css') @endsection

@section('content')
<x-navbar />

<div id="config-cont" class="min-h-screen flex justify-center py-10 bg-[#ecf0f1]">
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
</div>
@endsection